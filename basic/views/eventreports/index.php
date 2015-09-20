<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Event1;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отчёты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventreports-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить Отчёты', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'reportNumber',*/
            [
                'attribute'=>'eventNumber',
                'content'=>function($data){
                    return Event1::getEventName($data->eventNumber);
                }
            ],
            'photoReport',
            'eventDescription:ntext',

            ['class' => 'yii\grid\ActionColumn',   'header'=>'Дейсвия',   'headerOptions' => ['width' => '60'],   ],
        ],
    ]); ?>

</div>
