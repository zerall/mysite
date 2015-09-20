<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Event1;
use app\models\Services;

/* @var $this yii\web\View */
/* @var $model app\models\Eventservices */

$this->title = 'Редактировать: ' . ' ' . $model->eventNumber;
$this->params['breadcrumbs'][] = ['label' => 'Мероприятия-Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventservices-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if(Yii::$app->user->identity->username==='admin' || Yii::$app->user->identity->username==='demo'){?>

        <?= Html::a('Изменить', ['update', 'eventNumber' => $model->eventNumber, 'serviceNumber' => $model->serviceNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'eventNumber' => $model->eventNumber, 'serviceNumber' => $model->serviceNumber], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
        <?php } ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Мероприятия',
                'value' => Event1::getEventName([$model->eventNumber]),
            ],
            [
                'label' => 'Услуга',
                'value' => Services::getServicesName([$model->serviceNumber]),
            ],
        ],
    ]) ?>

</div>
