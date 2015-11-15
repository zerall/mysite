<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Organizators;
use app\models\User;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мероприятия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php  if (Yii::$app->user->getIdentity()->role === User::ROLE_ADMIN){?>
            <?= Html::a('Создать мероприятие', ['create'], ['class' => 'btn btn-success']) ?>
        <?php } ?>
    </p>
    <?php  if (Yii::$app->user->getIdentity()->role === User::ROLE_ADMIN  || Yii::$app->user->getIdentity()->role === User::ORGANIZATOR){?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'eventNumber',
            'eventType',
            'amountOfGuests',
            /*'place',*/
            'eventDate',
            'eventName',
            [
                'attribute'=>'orgNumber',
                'content'=>function($data){
                    return Organizators::getOrgsName($data->orgNumber);
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Дейсвия',
                'headerOptions' => ['width' => '60'],
            ],
        ],
    ]); ?>
    <?php } ?>
    <?php  if (Yii::$app->user->getIdentity()->role === User::ANIMATOR){?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'eventNumber',
                'eventType',
                'amountOfGuests',
                /*'place',*/
                'eventDate',
                'eventName',
                [
                    'attribute'=>'orgNumber',
                    'content'=>function($data){
                        return Organizators::getOrgsName($data->orgNumber);
                    }
                ],

            ],
        ]); ?>
    <?php } ?>
</div>
