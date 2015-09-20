<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Eventservices */

$this->title = 'Редактировать: ' . ' ' . $model->eventNumber;
$this->params['breadcrumbs'][] = ['label' => 'Мероприятия-Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eventNumber, 'url' => ['view', 'eventNumber' => $model->eventNumber, 'serviceNumber' => $model->serviceNumber]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="eventservices-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
