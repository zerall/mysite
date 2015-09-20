<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Animservices */

$this->title = 'Update Animservices: ' . ' ' . $model->animNumber;
$this->params['breadcrumbs'][] = ['label' => 'Animservices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->animNumber, 'url' => ['view', 'animNumber' => $model->animNumber, 'serviceNumber' => $model->serviceNumber]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="animservices-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
