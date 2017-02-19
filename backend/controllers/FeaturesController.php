<?php

namespace backend\controllers;


use backend\models\Features;
use backend\models\FeaturesGroups;
use backend\models\FeaturesValues;
use Yii;
use yii\web\Controller;

class FeaturesController extends Controller
{
    /**
     * Формирует вид для вывода групп характеристик и создания новой группы.
     * @return string|\yii\web\Response
     */
    public function actionIndex()
    {
        $features_groups = FeaturesGroups::find()->all();

        $left_sidebar = $this->renderPartial('left_sidebar', [
            'groups' => $features_groups
        ]);

        $content = '';
        $model = new FeaturesGroups();
        if ($model->load(\Yii::$app->request->post())) {
            if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
                if ($model->save()) {
                    \Yii::$app->session->setFlash('success', 'Группа хар-к успешно сохранена');
                    return $this->redirect(['features/index']);
                } else {
                    \Yii::$app->session->setFlash('error', 'Ошибка сохранения формы');
                    $content = $this->renderPartial('group_create_form', [
                        'model' => $model
                    ]);
                }
            } else {
                \Yii::$app->session->setFlash('error', 'Ошибка валидации данных');
                $content = $this->renderPartial('group_create_form', [
                    'model' => $model
                ]);
            }
        } else {
            $content = $this->renderPartial('group_create_form', [
                'model' => $model
            ]);
        }
        return $this->render('root_groups', [
            'header' => 'Группы характеристик',
            'left_sidebar' => $left_sidebar,
            'content' => $content
        ]);
    }

    public function actionFeatures($id)
    {
        $features_groups = FeaturesGroups::find()->all();

        $group = FeaturesGroups::findOne($id);

        $left_sidebar = $this->renderPartial('left_sidebar', [
            'groups' => $features_groups
        ]);

        $content = '';
        $errors = 0;

        $features = Features::find()->with('values')->where(['feature_gid' => $id])->all();

        $features_list = $this->renderPartial('features_list', [
            'features' => $features
        ]);

        $model = new Features();
        if ($model->load(\Yii::$app->request->post())) {

            $model->feature_show_on_list === 'on' ? $model->feature_show_on_list = '1' : $model->feature_show_on_list = '0';
            $model->feature_show_on_good === 'on' ? $model->feature_show_on_good = '1' : $model->feature_show_on_good = '0';
            $model->feature_required === 'on' ? $model->feature_required = '1' : $model->feature_required = '0';

            if ($model->validate()) {
                $transaction = Yii::$app->db->beginTransaction();
                if ($model->save()) {
                    $fid = Yii::$app->db->lastInsertID;
                    foreach(explode(',', $_POST['feature_values']) as $value) {
                        if (trim($value)) {
                            $feature_value = new FeaturesValues();
                            $feature_value->fid = $fid;
                            $feature_value->value = $value;
                            if (!$feature_value->save()) { $errors++; }
                            unset($feature_value);
                        }
                    }

                    if ($errors === 0) {
                        $transaction->commit();
                        \Yii::$app->session->setFlash('success', 'Характеристика успешно сохранена');
                        return $this->redirect(["features/$group->group_id"]);
                    } else {
                        $transaction->rollBack();
                        \Yii::$app->session->setFlash('error', 'Ошибка сохранения значений');
                    }
                } else {
                    $transaction->rollBack();
                    \Yii::$app->session->setFlash('error', 'Ошибка сохранения формы');
                    $content = $this->renderPartial('features_create_form', [
                        'group' => $group,
                        'model' => $model
                    ]);
                }
            } else {
                \Yii::$app->session->setFlash('error', 'Ошибка валидации данных');
                $content = $this->renderPartial('features_create_form', [
                    'group' => $group,
                    'model' => $model
                ]);
            }
        } else {
            $content = $this->renderPartial('features_create_form', [
                'group' => $group,
                'model' => $model
            ]);
        }

        return $this->render('root_features', [
            'header' => "Характеристики группы \"$group->group_name\"",
            'left_sidebar' => $left_sidebar,
            'form' => $content,
            'features_list' => $features_list
        ]);
    }
}