<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Animservices */

$this->title = 'Изменить: ' . ' ' . $model->animNumber;
$this->params['breadcrumbs'][] = ['label' => 'Услуги аниматоров', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->animNumber, 'url' => ['view', 'animNumber' => $model->animNumber, 'serviceNumber' => $model->serviceNumber]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="animservices-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
