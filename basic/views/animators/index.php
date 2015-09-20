<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Аниматоры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animators-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить аниматора', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'animNumber',
            'secName',
            'name',
            'lastName',
            'email:email',
            'salary',
            'telNumb',
            'experience',
            // 'login',
            // 'password',

            ['class' => 'yii\grid\ActionColumn',   'header'=>'Дейсвия',   'headerOptions' => ['width' => '60'],   ],
        ],
    ]); ?>

</div>
