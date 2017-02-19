<?php

namespace backend\controllers;


use backend\models\Categories;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class CategoriesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'create'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
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

    public function actionIndex()
    {
        $categories = Categories::find()->all();

        $left_sidebar = $this->renderPartial('left_sidebar', [
            'categories' => $categories
        ]);

        return $this->render('root', [
            'left_sidebar' => $left_sidebar
        ]);
    }

    public function actionCreate()
    {
        $categories = Categories::find()->all();

        $left_sidebar = $this->renderPartial('left_sidebar', [
            'categories' => $categories
        ]);

        $model = new Categories();

        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                \Yii::$app->session->setFlash('success', 'Категория успешно сохранена');

                return $this->redirect(['categories/index']);
            } else {
                \Yii::$app->session->setFlash('error', 'Ошибка сохранения формы');
                return $this->render('root', [
                    'model' => $model,
                    'left_sidebar' => $left_sidebar
                ]);
            }
        } else {
            \Yii::$app->session->setFlash('error', 'Ошибка валидации данных');
            return $this->render('root', [
                'model' => $model,
                'left_sidebar' => $left_sidebar
            ]);
        }
    }
}