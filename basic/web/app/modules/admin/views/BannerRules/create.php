<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BannerRules */

$this->title = 'Create Banner Rules';
$this->params['breadcrumbs'][] = ['label' => 'Banner Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-rules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
