<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'showOnEmpty'=>true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fio',
            'password',
            [
                'attribute'=>'role',
                'content'=>function($data){
                    return User::getStatusesArray()[$data->role];
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Дейсвия',
                'headerOptions' => ['width' => '60'],
            ],
        ],
    ]);
    ?>

</div>
