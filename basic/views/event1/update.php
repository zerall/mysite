<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Event1 */

$this->title = 'Редактировать мероприятие №' . ' ' . $model->eventNumber;
$this->params['breadcrumbs'][] = ['label' => 'Мероприятия', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eventNumber, 'url' => ['view', 'id' => $model->eventNumber]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="event1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
