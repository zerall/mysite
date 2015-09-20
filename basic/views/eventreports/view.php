<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Eventreports */

$this->title = 'Просмотр отчёта №' . ' ' . $model->reportNumber;
$this->params['breadcrumbs'][] = ['label' => 'Отчёты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventreports-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'reportNumber' => $model->reportNumber, 'eventNumber' => $model->eventNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'reportNumber' => $model->reportNumber, 'eventNumber' => $model->eventNumber], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            /*'reportNumber',*/
            'eventNumber',
            'photoReport',
            'eventDescription:ntext',
        ],
    ]) ?>

</div>
