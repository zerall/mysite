<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Organizators;

/* @var $this yii\web\View */
/* @var $model app\models\Event1 */
$this->title = 'Просмотр мероприятия №: ' . ' ' . $model->eventNumber;
$this->params['breadcrumbs'][] = ['label' => 'Мероприятие', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if(Yii::$app->user->identity->username==='admin' || Yii::$app->user->identity->username==='demo'){?>
        <?= Html::a('Изменить', ['update', 'id' => $model->eventNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->eventNumber], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
        <?php } ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'eventNumber',
            'eventType',
            'amountOfGuests',
            [
                'label' => 'Организатор',
                'value' => Organizators::getOrgsName([$model->orgNumber]),
            ],
            /*'place',*/

            'eventDate',
            'eventName',
        ],
    ]) ?>

</div>
