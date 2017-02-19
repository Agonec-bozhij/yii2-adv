<?php $this->title = $header ?>
<?php $this->params['breadcrumbs'][] = ['label' => 'Группы характеристик', 'url' => ['/features']] ?>
<?php $this->params['breadcrumbs'][] = $this->title ?>

<h1><?= $header ?></h1>

<div class="admin_content row">
    <div class="left_sidebar col-lg-2">
        <?= $left_sidebar ?>
    </div>
    <div class="main_content col-lg-10">
        <?= $features_list ?>
        <?= $form ?>
    </div>
</div>