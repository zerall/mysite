<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Animators;
use app\models\Event1;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мероприятия-Аниматоры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animevents-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label'=>'Аниматор',
                'attribute'=>'animNumber',
                'content'=>function($data){
                    return Animators::getAnimName($data->animNumber);
                }
            ],
            [
                'label'=>'Мероприятие',
                'attribute'=>'eventNumber',
                'content'=>function($data){
                    return Event1::getEventName($data->eventNumber);
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Дейсвия',
                'headerOptions' => ['width' => '60'],
            ],
        ],
    ]); ?>

</div>
