<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Animservices */

$this->title = $model->animNumber;
$this->params['breadcrumbs'][] = ['label' => 'Animservices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animservices-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'animNumber' => $model->animNumber, 'serviceNumber' => $model->serviceNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'animNumber' => $model->animNumber, 'serviceNumber' => $model->serviceNumber], [
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
            'animNumber',
            'serviceNumber',
        ],
    ]) ?>

</div>
