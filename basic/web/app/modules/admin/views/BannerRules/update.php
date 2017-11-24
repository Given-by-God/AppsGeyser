<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BannerRules */

$this->title = 'Update Banner Rules: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Banner Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="banner-rules-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
