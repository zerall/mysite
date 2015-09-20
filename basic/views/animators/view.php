<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Animators */

$this->title = 'Просмотр аниматора: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Аниматоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animators-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->animNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Просмотреть услуги', ['site/anim-services', 'id' => $model->animNumber], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->animNumber], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'animNumber',
            'secName',
            'name',
            'lastName',
            'email:email',
            'telNumb',
            'experience',
            'salary',
            'login',
            'password',
        ],
    ]) ?>

</div>
