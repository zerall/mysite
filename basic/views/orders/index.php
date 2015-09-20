<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Clients;
use app\models\Event1;
use app\models\Services;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if(Yii::$app->user->identity->username==='admin'){ ?>

        <?= Html::a('Создать Заказ', ['create'], ['class' => 'btn btn-success']) ?>
        <?php } ?>
    </p>
    <?php if(Yii::$app->user->identity->username==='admin'){?>
    <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'orderNumber',
                [
                    'label'=>'Мероприятие',
                    'attribute'=>'eventNumber',
                    'content'=>function($data){
                        return Event1::getEventName($data->eventNumber);
                    }
                ],/*
            [
                'attribute'=>'serviceNumber',
                'content'=>function($data){
                    return Services::getServicesName($data->serviceNumber);
                }
            ],*/
                'orderDate',
                [
                    'attribute'=>'clientNumber',
                    'content'=>function($data){
                        return Clients::getClientsName($data->clientNumber);
                    }
                ],
                ['class' => 'yii\grid\ActionColumn',
                    'header'=>'Дейсвия',
                    'headerOptions' => ['width' => '60'],
                ],
            ],
        ]);
    ?>
<?php } ?>
    <?php if( Yii::$app->user->identity->username==='demo'){?>
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'orderNumber',
                [
                    'label'=>'Мероприятие',
                    'attribute'=>'eventNumber',
                    'content'=>function($data){
                        return Event1::getEventName($data->eventNumber);
                    }
                ],/*
            [
                'attribute'=>'serviceNumber',
                'content'=>function($data){
                    return Services::getServicesName($data->serviceNumber);
                }
            ],*/
                'orderDate',
                [
                    'attribute'=>'clientNumber',
                    'content'=>function($data){
                        return Clients::getClientsName($data->clientNumber);
                    }
                ],
                'orderDate',
            ],
        ]);
        ?>
    <?php } ?>

</div>
