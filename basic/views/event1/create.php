<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Event1 */

$this->title = 'Создать мероприятие';
$this->params['breadcrumbs'][] = ['label' => 'Мероприятие', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
