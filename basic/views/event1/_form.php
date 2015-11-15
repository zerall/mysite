<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Organizators;
use app\models\User;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Event1 */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="event1-form col-lg-6 col-md-6 col-sm-12 col-xs-12">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eventType')->dropDownList(['prompt'=>'Выбрать мероприятие', 'Детский праздник' => 'Детский праздник', 'День рождения' => 'День рождения', 'Свадьба' => 'Свадьба',
        'Выпускной' => 'Выпускной', 'Новый год' => 'Новый год', 'Корпоративы' => 'Корпоративы']); ?>

    <?= $form->field($model, 'amountOfGuests')->textInput(['maxlength' => 10]) ?>
    <?php  if (Yii::$app->user->getIdentity()->role === User::ROLE_ADMIN){?>
    <?= $form->field($model, 'orgNumber')->dropDownList(Organizators::getOrgsList(),['prompt'=>'Выбрать организатора']) ?>
    <?php } ?>
    <?= $form->field($model, 'place')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'eventDate')->input("date") ?>

    <?= $form->field($model, 'eventName')->textInput(['maxlength' => 30]) ?>

    <div class="form-group text-right">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
