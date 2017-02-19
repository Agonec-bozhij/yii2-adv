<div class="list-group">
    <?php foreach ($categories as $cat) : ?>
            <a href="<?= $cat->category_id ?>" class="list-group-item"><?= $cat->cat_title ?></a>
    <? endforeach; ?>
</div>