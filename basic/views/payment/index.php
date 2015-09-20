<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Платежи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать платеж', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            /*'payNumber',*/
            'orderNumber',
            'paymentDate',
            'payAmount',

            ['class' => 'yii\grid\ActionColumn',   'header'=>'Дейсвия',   'headerOptions' => ['width' => '60'],   ],
        ],
    ]); ?>

</div>
