<?php

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = 'My Yii Application';
use yii\helpers\Html;
?>


<?php


echo 'good';
?>


<div class="row">
    <div class="col-lg-6">
<!--        --><?//= Yii::$app->session->getFlash('error'); ?>
        <?= $form = Html::beginForm(['site/index'], 'post',['id' => 'contact-form']) ?>

        <?= $form=Html::label('ip', 'main-url', ['class' => 'control-label']) ?>
        <?= $form = Html::activeInput('text', $model, 'ip',['required' => true,'class' =>'form-control']) ?>

        <?= $form=Html::label('get', 'main-url', ['class' => 'control-label']) ?>
        <?= $form = Html::activeInput('text', $model, 'get',['required' => true,'class' =>'form-control']) ?>


        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

        <?=$form = Html::endForm(); ?>

    </div>

</div>
