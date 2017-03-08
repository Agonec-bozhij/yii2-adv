<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="form_container col-lg-10">
    <p>Создание товара:</p>
    <?php $form = ActiveForm::begin(['options' => [
        'enctype' => 'multipart/form-data',
        'class' => 'form-horizontal col-lg-5'
    ]]); ?>

    <?= $form->field($model, 'good_cid')->dropDownList(ArrayHelper::map($categories, 'category_id', 'cat_title')) ?>

    <?= $form->field($model, 'good_title')->textInput() ?>

    <?= $form->field($model, 'good_mid')->textInput() ?>

    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <div class="form-group">
        <?= Html::submitButton('Создать товар', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    <!--        <div class="form-group">-->
    <!--            <label for="good_title" class="col-lg-2">Название товара:</label>-->
    <!--            <div class="col-lg-5">-->
    <!--                <input type="text" name="Goods[good_title]" id="good_title" class="form-control"-->
    <!--                       aria-describedby="help-good_title">-->
    <!--                <span id="help-good_title" class="help-block"></span>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <button class="btn btn-info col-lg-offset-2 col-lg-1" type="submit">Создать</button>-->
    <!--    </form>-->
</div>

