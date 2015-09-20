<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Clients;
use app\models\Event1;
use app\models\Services;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
$this->title = 'Просмотр заказа №' . ' ' . $model->orderNumber;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->orderNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->orderNumber], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'orderNumber',
            [
                'label' => 'Мероприятие',
                'value' => Event1::getEventName([$model->eventNumber]),
            ],
            'orderDate',
            [
                'label' => 'Клиент',
                'value' => Clients::getClientsName([$model->clientNumber]),
            ],
        ],
    ]) ?>

</div>
