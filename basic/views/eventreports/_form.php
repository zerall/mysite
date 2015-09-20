<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Event1;

/* @var $this yii\web\View */
/* @var $model app\models\Eventreports */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eventreports-form col-lg-6 col-md-6 col-sm-12 col-xs-12">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eventNumber')->dropDownList(Event1::getEventList(),['prompt'=>'Выбрать мероприятие']) ?>

    <?= $form->field($model, 'photoReport')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'eventDescription')->textarea(['rows' => 6]) ?>

    <div class="form-group text-right">
        <?= Html::submitButton($model->isNewRecord ? 'Cоздать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
