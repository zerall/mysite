<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Eventreports */

$this->title = 'Обновить отчёт №' . ' ' . $model->reportNumber;
$this->params['breadcrumbs'][] = ['label' => 'Отчёты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reportNumber, 'url' => ['view', 'reportNumber' => $model->reportNumber, 'eventNumber' => $model->eventNumber]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="eventreports-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
