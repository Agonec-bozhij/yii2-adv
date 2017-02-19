<div class="list-group">
    <?php foreach ($categories as $category) : ?>
        <a href="<?= \yii\helpers\Url::to(['goods/category', 'id' => $category->category_id]) ?>" class="list-group-item"><?= $category->cat_title ?></a>
    <? endforeach; ?>
</div>