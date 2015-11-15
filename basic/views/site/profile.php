<?php
/**
 * Created by PhpStorm.
 * User: Зера
 * Date: 14.11.2015
 * Time: 16:24
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form ActiveForm */
?>
<div class="main-profile">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    if($model->user)
        echo $form->field($model->user, 'user_name');
    ?>
    <?= $form->field($model, 'first_name') ?>
    <?= $form->field($model, 'second_name') ?>
    <?= $form->field($model, 'middle_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Редактировать', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- main-profile -->