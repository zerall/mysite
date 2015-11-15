<?php
/**
 * Created by PhpStorm.
 * User: Зера
 * Date: 14.11.2015
 * Time: 16:18
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\RegForm */
/* @var $form ActiveForm */
?>

<div class="main-reg">
    <?php if(Yii::$app->session->hasFlash('success')){ ; ?>
        <div class="alert alert-success">
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php } ?>
    <?php if(Yii::$app->session->hasFlash('error')){ ; ?>
        <div class="alert alert-error">
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php } ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- main-reg -->