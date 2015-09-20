<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Orders;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-form col-lg-6 col-md-6 col-sm-12 col-xs-12">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orderNumber')->dropDownList(Orders::getOrderList(),['prompt'=>'Выбрать заказ']) ?>

    <?= $form->field($model, 'paymentDate')->input("date") ?>

    <?= $form->field($model, 'payAmount')->textInput() ?>

    <div class="form-group text-right">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
