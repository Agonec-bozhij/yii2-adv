<h1>Категории</h1>

<div class="admin_content row">
    <div class="left_sidebar col-lg-2">
        <?= $left_sidebar ?>
    </div>

    <div class="main_content col-lg-10">
        <p>Создание категории:</p>
        <div class="form_container">
            <form action="<?= \yii\helpers\Url::to(['categories/create']) ?>" method="post" class="form-horizontal">
                <?= \yii\helpers\Html::hiddenInput(Yii::$app->getRequest()->csrfParam, Yii::$app->getRequest()->getCsrfToken(), []) ?>
                <div class="form-group <?php if (isset($model->errors['cat_pid'])) : ?>has-error<?php endif ?>">
                    <label for="cat_pid" class="col-lg-2">Родительская категория:</label>
                    <div class="col-lg-5">
                        <input type="number" name="Categories[cat_pid]" id="cat_pid" class="form-control"
                               value="<?= $model->cat_pid ?>" aria-describedby="help-cat_pid">
                        <span id="help-cat_pid" class="help-block">
                            <?php if (isset($model->errors['cat_pid'])) : ?>
                                <?php foreach ($model->errors['cat_pid'] as $error) : ?>
                                    <?= $error ?><br>
                                <? endforeach ?>
                            <?php endif ?>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cat_url" class="col-lg-2">Вид ссылки(текст):</label>
                    <div class="col-lg-5">
                        <input type="text" name="Categories[cat_url]" id="cat_url" class="form-control"
                               value="<?= $model->cat_url ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cat_title" class="col-lg-2">Заголовок категории:</label>
                    <div class="col-lg-5">
                        <input type="text" name="Categories[cat_title]" id="cat_title" class="form-control"
                               value="<?= $model->cat_title ?>">
                    </div>
                </div>
                <button class="btn btn-info col-lg-offset-2 col-lg-1" type="submit">Создать</button>
            </form>
        </div>
    </div>
</div>