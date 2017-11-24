<?php

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = 'My Yii Application';
use yii\helpers\Html;
?>


<div class="row">
    <div class="col-lg-6">
        <pre>
            Так как localhost - то задаем значения сами
            Например :  '162.243.9.153' //United States
                        '43.213.19.135' //Japan
                        '62.143.9.153' //Germany
        </pre>
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
