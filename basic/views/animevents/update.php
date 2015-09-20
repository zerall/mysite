<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Animevents */

$this->title = 'Изменить Мероприятия-Аниматоры: ' . ' ' . $model->animNumber;
$this->params['breadcrumbs'][] = ['label' => 'Мероприятия-Аниматоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->animNumber, 'url' => ['view', 'animNumber' => $model->animNumber, 'eventNumber' => $model->eventNumber]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="animevents-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
