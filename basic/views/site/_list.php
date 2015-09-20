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
        <h4><?= Html::encode($model->serviceName) ?></h4>
        <div><?= Html::encode($model->serviceDescription) ?></div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
                <span class="label label-warning"><?= Html::encode($model->price) ?></span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right" id = "servis">
                    <?= Html::a('Заказ', ['site/order-form'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </blockquote>
</div>

