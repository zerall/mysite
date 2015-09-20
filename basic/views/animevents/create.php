<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Animevents */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Занятость аниматора', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animevents-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
