<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Animservices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animservices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'animNumber')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'serviceNumber')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
