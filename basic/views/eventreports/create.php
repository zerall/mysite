<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Eventreports */

$this->title = 'Создать отчёт';
$this->params['breadcrumbs'][] = ['label' => 'Отчёты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventreports-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
