<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Организаторы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizators-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить Организатора', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'orgNumber',
            'secName',
            'name',
            'lastName',
            'email:email',
            'salary',
            'telNumb',
            // 'login',
            // 'password',

            ['class' => 'yii\grid\ActionColumn',   'header'=>'Дейсвия',   'headerOptions' => ['width' => '60'],   ],
        ],
    ]); ?>

</div>
