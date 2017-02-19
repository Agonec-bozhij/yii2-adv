<div class="main_content col-lg-10">
    <p>Создание группы хар-к:</p>
    <div class="form_container">
        <form action="<?= \yii\helpers\Url::to(['features/index']) ?>" method="post" class="form-horizontal">
            <?= \yii\helpers\Html::hiddenInput(Yii::$app->getRequest()->csrfParam, Yii::$app->getRequest()->getCsrfToken(), []) ?>
            <div class="form-group <?php if (isset($model->errors['group_name'])) : ?>has-error<?php endif ?>">
                <label for="group_name" class="col-lg-2">Имя группы хар-к:</label>
                <div class="col-lg-5">
                    <input type="text" name="FeaturesGroups[group_name]" id="group_name" class="form-control"
                           value="<?= $model->group_name ?>" aria-describedby="help-group_name">
                        <span id="help-group_name" class="help-block">
                            <?php if (isset($model->errors['group_name'])) : ?>
                                <?php foreach ($model->errors['group_name'] as $error) : ?>
                                    <?= $error ?><br>
                                <? endforeach ?>
                            <?php endif ?>
                        </span>
                </div>
            </div>
            <div class="form-group">
                <label for="group_sort" class="col-lg-2">Сортировка:</label>
                <div class="col-lg-5">
                    <input type="number" name="FeaturesGroups[group_sort]" id="group_sort" class="form-control"
                           value="<?= $model->group_sort ? $model->group_sort : 0 ?>">
                </div>
            </div>
            <button class="btn btn-info col-lg-offset-2 col-lg-1" type="submit">Создать</button>
        </form>
    </div>
</div>