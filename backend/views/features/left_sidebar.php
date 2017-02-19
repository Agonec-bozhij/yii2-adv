<div class="list-group">
    <?php foreach ($groups as $group) : ?>
            <a href="<?= \yii\helpers\Url::to(['features/features', 'id' => $group->group_id]) ?>" class="list-group-item"><?= $group->group_name ?></a>
    <? endforeach; ?>
</div>