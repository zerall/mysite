<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Organizators */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organizators-form col-lg-6 col-md-6 col-sm-12 col-xs-12">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'secName')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'salary')->textInput() ?>

    <?= $form->field($model, 'telNumb')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 20]) ?>

    <div class="form-group text-right">
        <?= Html::submitButton($model->isNewRecord ? 'Cоздать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
