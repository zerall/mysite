<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php  if (Yii::$app->user->getIdentity()->role === User::ROLE_ADMIN  || Yii::$app->user->getIdentity()->role === User::ORGANIZATOR){?>
            <?= Html::a('Создать услугу', ['create'], ['class' => 'btn btn-success']) ?>
        <?php } ?>
    </p>
    <?php  if (Yii::$app->user->getIdentity()->role === User::ROLE_ADMIN  || Yii::$app->user->getIdentity()->role === User::ORGANIZATOR){?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'serviceNumber',
            'serviceName',
            'price',
            'serviceDescription:ntext',

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

                'serviceNumber',
                'serviceName',
                'price',
                'serviceDescription:ntext',
            ],
        ]); ?>
    <?php } ?>

</div>
