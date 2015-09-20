<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Animators */

$this->title = 'Редактирование аниматора: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Аниматоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->animNumber]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="animators-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
