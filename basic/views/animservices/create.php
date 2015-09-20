<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Animservices */

$this->title = 'Добавить услугу';
$this->params['breadcrumbs'][] = ['label' => 'Услуги аниматоров', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animservices-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
