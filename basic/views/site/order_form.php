<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Event1;
use app\models\Services;


/* @var $this yii\web\View */
$this->title = 'Оформить заказ';
$this->params['breadcrumbs'][] = $this->title
?>

<div class="order-form">
<?php $form = ActiveForm::begin(); ?>
    <h2 align="center"> ОФОРМИТЬ ЗАКАЗ  </h2>    <br>
<div class="row" >
	<div class="col-lg-6 col-md-6 col-sm-6">
		<div class = "row">
            <div class = "col-lg-6 col-md-6 col-sm-6"><?= $form->field($clientModel, 'name')->textInput(['maxlength' => 15]) ?></div>
            <div class = "col-lg-6 col-md-6 col-sm-6"><?= $form->field($clientModel, 'secName')->textInput(['maxlength' => 20]) ?></div>
		 </div>
        <?= $form->field($clientModel, 'lastName')->textInput(['maxlength' => 15]) ?>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6">
		<?= $form->field($clientModel, 'email')->textInput(['maxlength' => 20]) ?>
    	<?= $form->field($clientModel, 'telNumb')->widget(\yii\widgets\MaskedInput::className(), [
   			'mask' => '+7(999)9999999',
		]);?>
	</div>
</div>
    <br>
<div class="row" id = "g">
<div class="col-lg-6 col-md-6 col-sm-6">

	<?= $form->field($model, 'eventType')->dropDownList(['prompt'=>'Выбрать мероприятие', 'Детский праздник' => 'Детский праздник', 'День рождения' => 'День рождения', 'Свадьба' => 'Свадьба',
        'Выпускной' => 'Выпускной', 'Новый год' => 'Новый год', 'Корпоративы' => 'Корпоративы']); ?>

    <?= $form->field($model, 'amountOfGuests')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'eventDate')->input("date") ?>


</div>
<div class="col-lg-6 col-md-6 col-sm-6">

    <?= $form->field($model, 'eventName')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($clientModel, 'comment')->textArea(['row' => '50','style' => 'height: 110px;']) ?>


</div>



</div>
<br>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>