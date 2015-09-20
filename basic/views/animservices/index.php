<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Animators;
use app\models\Services;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Услуги аниматоров';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animservices-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить услугу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'animNumber',
                'content'=>function($data){
                    return Animators::getAnimName($data->animNumber);
                }
            ],
            [
                'attribute'=>'serviceNumber',
                'content'=>function($data){
                    return Services::getServName($data->serviceNumber);
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Дейсвия',
                'headerOptions' => ['width' => '60'],
            ],
        ],
    ]); ?>

</div>
