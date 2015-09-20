<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title
?>

<h1><?= $this->title ?></h1>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'itemView' => function ($model, $key, $index, $widget) {
        return $this->render('about', ['model' => $model]);
    },
]); ?>


