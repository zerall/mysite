<?php
/**
 * Created by PhpStorm.
 * User: Зера
 * Date: 07.05.2015
 * Time: 22:06
 */
use yii\helpers\Html;
?>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <br><blockquote>

       <pre> <p style="font-size: 16px"> <?= Html::encode($model->eventDate) ?>  -  Cостоиться <?= Html::encode($model->eventName) ?>  </p> </pre>
    </blockquote>
</div>

