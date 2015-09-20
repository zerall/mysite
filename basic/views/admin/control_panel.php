<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Панель управления';
?>

<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <?php if(Yii::$app->user->identity->username==='admin' || Yii::$app->user->identity->username==='demo'){?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Заказы</div>
                <div class="panel-body text-right">
                    <!-- Single button -->
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                      <?php if(Yii::$app->user->identity->username==='admin'){?>
                      <?= Html::a('Добавить', ['orders/create'], ['class' => 'btn btn-info']) ?>
                      <?php } ?>
                      <?= Html::a('Открыть', ['orders/index'], ['class' => 'btn btn-info']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(Yii::$app->user->identity->username==='admin' || Yii::$app->user->identity->username==='demo'){?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Оплаты</div>
                <div class="panel-body text-right">
                                        <!-- Single button -->
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                      <?= Html::a('Добавить', ['payment/create'], ['class' => 'btn btn-info']) ?>
                      <?= Html::a('Открыть', ['payment/index'], ['class' => 'btn btn-info']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Мероприятия</div>
                <div class="panel-body text-right">
                                        <!-- Single button -->
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <?php if(Yii::$app->user->identity->username==='admin' || Yii::$app->user->identity->username==='demo'){?>

                        <?= Html::a('Добавить', ['event1/create'], ['class' => 'btn btn-info']) ?>
                        <?php } ?>
                      <?= Html::a('Открыть', ['event1/index'], ['class' => 'btn btn-info']) ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Услуги</div>
                <div class="panel-body text-right">
                                        <!-- Single button -->
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <?php if(Yii::$app->user->identity->username==='admin' || Yii::$app->user->identity->username==='demo'){?>

                        <?= Html::a('Добавить', ['services/create'], ['class' => 'btn btn-info']) ?>
                        <?php }?>
                      <?= Html::a('Открыть', ['services/index'], ['class' => 'btn btn-info']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if(Yii::$app->user->identity->username==='admin' || Yii::$app->user->identity->username==='demo'){?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Отчеты</div>
                <div class="panel-body text-right">
                                        <!-- Single button -->
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                      <?= Html::a('Добавить', ['eventreports/create'], ['class' => 'btn btn-info']) ?>
                      <?= Html::a('Открыть', ['eventreports/index'], ['class' => 'btn btn-info']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Клиенты</div>
                <div class="panel-body text-right">
                                        <!-- Single button -->
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                      <?php if(Yii::$app->user->identity->username==='admin' || Yii::$app->user->identity->username==='demo'){?>
                      <?= Html::a('Добавить', ['clients/create'], ['class' => 'btn btn-info']) ?>
                      <?php } ?>
                      <?= Html::a('Открыть', ['clients/index'], ['class' => 'btn btn-info']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if(Yii::$app->user->identity->username==='admin' || Yii::$app->user->identity->username==='demo'){?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Аниматоры</div>
                <div class="panel-body text-right">
                                        <!-- Single button -->
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                      <?= Html::a('Добавить', ['animators/create'], ['class' => 'btn btn-info']) ?>
                      <?= Html::a('Открыть', ['animators/index'], ['class' => 'btn btn-info']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(Yii::$app->user->identity->username==='admin' || Yii::$app->user->identity->username==='demo'){?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Мероприятия - Аниматоры</div>
                    <div class="panel-body text-right">
                        <!-- Single button -->
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <?= Html::a('Добавить', ['animevents/create'], ['class' => 'btn btn-info']) ?>
                            <?= Html::a('Открыть', ['animevents/index'], ['class' => 'btn btn-info']) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if(Yii::$app->user->identity->username==='admin'){?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Организаторы</div>
                <div class="panel-body text-right">
                                        <!-- Single button -->
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                      <?= Html::a('Добавить', ['organizators/create'], ['class' => 'btn btn-info']) ?>
                      <?= Html::a('Открыть', ['organizators/index'], ['class' => 'btn btn-info']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
