<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizators */

$this->title = 'Редактировать организатора:' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Организаторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->orgNumber]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="organizators-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
