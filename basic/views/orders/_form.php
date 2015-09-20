<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Clients;
use app\models\Event1;
use app\models\Services;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form col-lg-6 col-md-6 col-sm-12 col-xs-12">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eventNumber')->dropDownList(Event1::getEventList(),['prompt'=>'Выбрать мероприятие']) ?>

    <?= $form->field($model, 'orderDate')->input("date") ?>

    <?= $form->field($model, 'clientNumber')->dropDownList(Clients::getClientsList(),['prompt'=>'Выбрать клиента']) ?>

    <div class="form-group text-right">
        <?= Html::submitButton($model->isNewRecord ? 'Cоздать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
