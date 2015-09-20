<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Event1;
use app\models\Animators;

/* @var $this yii\web\View */
/* @var $model app\models\Animevents */

$this->title = 'Просмотр мероприятия-аниматор №' . ' ' . $model->animNumber;
$this->params['breadcrumbs'][] = ['label' => 'Мероприятия-Аниматоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animevents-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'animNumber' => $model->animNumber, 'eventNumber' => $model->eventNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'animNumber' => $model->animNumber, 'eventNumber' => $model->eventNumber], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Аниматор',
                'value' => Animators::getAnimName([$model->animNumber]),
            ],
            [
                'label' => 'Мероприятие',
                'value' => Event1::getEventName([$model->eventNumber]),
            ],
    ]
    ]) ?>

</div>
