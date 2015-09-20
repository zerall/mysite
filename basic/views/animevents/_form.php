<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Animators;
use app\models\Event1;

/* @var $this yii\web\View */
/* @var $model app\models\Animevents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animevents-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'animNumber')->dropDownList(Animators::getAnimList(),['prompt'=>'Выбрать аниматора']) ?>

    <?= $form->field($model, 'eventNumber')->dropDownList(Event1::getEventList(),['prompt'=>'Выбрать мероприятие']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
