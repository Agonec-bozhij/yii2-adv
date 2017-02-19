<?php $this->title = $header ?>
<?php $this->params['breadcrumbs'][] = $this->title ?>

<h1><?= $header ?></h1>

<div class="admin_content row">
    <div class="left_sidebar col-lg-2">
        <?= $left_sidebar ?>
    </div>
    <?= $content ?>
</div>