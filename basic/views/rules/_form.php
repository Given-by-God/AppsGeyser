<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'get')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_banner')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
