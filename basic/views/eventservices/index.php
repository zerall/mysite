<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Services;
use app\models\Event1;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мероприятия-Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventservices-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'eventNumber',
                'content'=>function($data){
                    return Event1::getEventName($data->eventNumber);
                }
            ],
            [
                'attribute'=>'serviceNumber',
                'content'=>function($data){
                    return Services::getServName($data->serviceNumber);
                }
            ],

            ['class' => 'yii\grid\ActionColumn',   'header'=>'Дейсвия',   'headerOptions' => ['width' => '60'],   ],
        ],
    ]); ?>

</div>
