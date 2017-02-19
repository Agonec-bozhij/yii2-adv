<p>Создание товара:</p>
<div class="form_container">
    <form action="<?= \yii\helpers\Url::to(["features/$group->group_id"]) ?>" method="post" class="form-horizontal">
        <?= \yii\helpers\Html::hiddenInput(Yii::$app->getRequest()->csrfParam, Yii::$app->getRequest()->getCsrfToken(), []) ?>

        <div class="form-group">
            <label for="good_cid" class="col-lg-2">Категория товара:</label>
            <div class="col-lg-5">
                <select name="Goods[good_cid]" id="good_cid" class="form-control">
                    <? foreach ($categories as $category) : ?>
                        <option value="<?= $category->category_id ?>"><?= $category->cat_title ?></option>
                    <? endforeach ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="good_title" class="col-lg-2">Название товара:</label>
            <div class="col-lg-5">
                <input type="text" name="Goods[good_title]" id="good_title" class="form-control"
                       aria-describedby="help-good_title">
                <span id="help-good_title" class="help-block"></span>
            </div>
        </div>

        <button class="btn btn-info col-lg-offset-2 col-lg-1" type="submit">Создать</button>
    </form>
</div>

