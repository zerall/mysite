<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Animators;
use app\models\Services;

/* @var $this yii\web\View */
/* @var $model app\models\Animservices */

$this->title = 'Просмотр услуг аниматора №' . ' ' . $model->animNumber;
$this->params['breadcrumbs'][] = ['label' => 'Услуги аниматоров', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animservices-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'animNumber' => $model->animNumber, 'serviceNumber' => $model->serviceNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'animNumber' => $model->animNumber, 'serviceNumber' => $model->serviceNumber], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
                'label' => 'Услуга',
                'value' => Services::getServName([$model->serviceNumber]),
            ],
        ],
    ]) ?>

</div>
