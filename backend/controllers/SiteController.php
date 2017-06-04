<?php
namespace backend\controllers;

use Yii;

use yii\filters\ContentNegotiator;
use yii\filters\Cors;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\rest\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'actions' => ['login', 'error'],
                    'allow' => true,
                ],
                [
                    'actions' => ['logout', 'index'],
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ];

        $behaviors['corsFilter'] = [
            'class' => Cors::className(),
            'cors' => [
//                'Access-Control-Allow-Origin' => ['*'],
                'Origin' => ['*'],
                'Access-Control-Request-Methods' => ['GET', 'POST', 'OPTIONS', 'DELETE', 'PUT'],
                'Access-Control-Request-Headers' => ['*'],
                'Access-Control-Allow-Credentials' => true,
            ]
        ];

        $behaviors['contentNegotiator'] = [
            'class' => ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ],
        ];

        $behaviors['verbs'] = [
            'class' => VerbFilter::className(),
            'actions' => [
                '*' => ['post', 'options', 'login']
            ],
        ];
        return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
        if (Yii::$app->request->isOptions) {
            return 'aaa';
        }
        $model = new LoginForm();
        $model->load(Yii::$app->request->bodyParams, '');
        if ($token = $model->auth()) {
            return $token;
        } else {
            return $model;
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public static function allowedDomains()
    {
        return ['*'];
    }
}
