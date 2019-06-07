<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TombolaMomento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tombola-momento-form">

    <?php $form = ActiveForm::begin(); ?>

   <!-- <?= $form->field($model, 'id')->textInput() ?>-->

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'horario')->textInput(['maxlength' => true]) ?>

    <!--<?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>-->

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
