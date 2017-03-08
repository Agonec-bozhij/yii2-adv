<?php

namespace backend\controllers;

use backend\models\Categories;
use backend\models\Goods;
use yii\web\Controller;

class GoodsController extends Controller
{
    public static function tableName()
    {
        return 'market_goods';
    }

    public function actionIndex()
    {
        $categories = Categories::find()->all();
        $left_sidebar = $this->renderPartial('left_sidebar', [
            'categories' => $categories
        ]);

        $content = '';
        $model = new Goods();
        if ($model->load(\Yii::$app->request->post())) {
            if ($model->save()) {
                \Yii::$app->session->setFlash('success', 'Товар успешно создан');

                return $this->redirect(['goods/index']);
            } else {
                \Yii::$app->session->setFlash('error', 'Ошибка сохранения формы');
                $content = $this->renderPartial('goods_create_form', [
                    'categories' => $categories,
                    'model' => $model
                ]);
            }
        } else {
            $content = $this->renderPartial('goods_create_form', [
                'categories' => $categories,
                'model' => $model
            ]);
        }

        return $this->render('root_goods', [
            'header' => 'Добавление товаров',
            'left_sidebar' => $left_sidebar,
            'content' => $content
        ]);
    }
}