<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form col-lg-6 col-md-6 col-sm-12 col-xs-12">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'serviceName')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'serviceDescription')->textarea(['rows' => 6]) ?>

    <div class="form-group text-right">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
