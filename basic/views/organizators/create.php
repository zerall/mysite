<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Organizators */

$this->title = 'Добавить организатора';
$this->params['breadcrumbs'][] = ['label' => 'Организаторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizators-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
