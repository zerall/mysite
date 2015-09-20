<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Eventservices */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Мероприятия-Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventservices-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
