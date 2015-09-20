<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Services;
use app\models\Event1;

/* @var $this yii\web\View */
/* @var $model app\models\Eventservices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eventservices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eventNumber')->dropDownList(Event1::getEventList(),['prompt'=>'Выбрать мероприятие']) ?>

    <?= $form->field($model, 'serviceNumber')->dropDownList(Services::getServList(),['prompt'=>'Выбрать услугу']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
