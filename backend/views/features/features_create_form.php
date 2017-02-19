<p>Создание характеристики:</p>
<div class="form_container">
    <form action="<?= \yii\helpers\Url::to(["features/$group->group_id"]) ?>" method="post" class="form-horizontal">
        <?= \yii\helpers\Html::hiddenInput(Yii::$app->getRequest()->csrfParam, Yii::$app->getRequest()->getCsrfToken(), []) ?>

        <input type="hidden" name="Features[feature_gid]" value="<?= $group->group_id ?>">
        <div class="form-group">
            <label for="feature_name" class="col-lg-2">Имя хар-ки:</label>
            <div class="col-lg-5">
                <input type="text" name="Features[feature_name]" id="feature_name" class="form-control"
                       aria-describedby="help-feature_name">
                <span id="help-feature_name" class="help-block"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="feature_type" class="col-lg-2">Тип хар-ки:</label>
            <div class="col-lg-5">
                <select name="Features[feature_type]" id="feature_type" class="form-control">
                    <? foreach ($model->feature_types as $type => $ru_type) : ?>
                        <option value="<?= $type ?>"><?= $ru_type ?></option>
                    <? endforeach ?>
                </select>
            </div>

        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-5">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="Features[feature_required]"> Ялвяется ли характеристика
                        обязательной к заполнению
                    </label>
                </div>
            </div>
        </div>


        <div class="form-group">
            <label for="feature_min" class="col-lg-2">Минимальное значение хар-ки:</label>
            <div class="col-lg-5">
                <input type="number" name="Features[feature_min]" id="feature_min" class="form-control"
                       aria-describedby="help-feature_min" value="0">
                <span id="help-feature_min" class="help-block"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="feature_max" class="col-lg-2">Максимальное значение хар-ки:</label>
            <div class="col-lg-5">
                <input type="number" name="Features[feature_max]" id="feature_max" class="form-control"
                       aria-describedby="help-feature_max" value="0">
                <span id="help-feature_max" class="help-block"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="feature_precision" class="col-lg-2">Количество знаков после запятой:</label>
            <div class="col-lg-5">
                <input type="number" name="Features[feature_precision]" id="feature_max" class="form-control"
                       aria-describedby="help-feature_precision">
                <span id="help-feature_precision" class="help-block"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="feature_sort" class="col-lg-2">Сортировка:</label>
            <div class="col-lg-5">
                <input type="number" name="Features[feature_sort]" id="feature_sort" class="form-control"
                       aria-describedby="help-feature_sort">
                <span id="help-feature_sort" class="help-block"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-5">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="Features[feature_show_on_list]" checked> Показывать ли хар-ку в
                        списке
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-5">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="Features[feature_show_on_good]" checked> Показывать ли хар-ку в
                        товаре
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="feature_values" class="col-lg-2">Значения хар-ки через запятую:</label>
            <div class="col-lg-5">
                <input type="text" name="feature_values" id="feature_values" class="form-control"
                       aria-describedby="help-feature_values">
                <span id="help-feature_values" class="help-block"></span>
            </div>
        </div>

        <button class="btn btn-info col-lg-offset-2 col-lg-1" type="submit">Создать</button>
    </form>
</div>
