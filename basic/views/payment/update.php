<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */

$this->title = 'Обновить платеж №' . ' ' . $model->payNumber;
$this->params['breadcrumbs'][] = ['label' => 'Платежи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->payNumber, 'url' => ['view', 'id' => $model->payNumber]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="payment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
