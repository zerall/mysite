<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Animators */

$this->title = 'Добавить аниматора';
$this->params['breadcrumbs'][] = ['label' => 'Аниматоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animators-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
