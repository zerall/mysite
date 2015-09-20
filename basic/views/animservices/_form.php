<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Animators;
use app\models\Services;

/* @var $this yii\web\View */
/* @var $model app\models\Animservices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animservices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'animNumber')->dropDownList(Animators::getAnimList(),['prompt'=>'Выбрать аниматора']) ?>

    <?= $form->field($model, 'serviceNumber')->dropDownList(Services::getServList(),['prompt'=>'Выбрать услугу']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
