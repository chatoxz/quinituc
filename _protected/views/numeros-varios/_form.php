<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NumerosVarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="numeros-varios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'atrasado')->textInput() ?>

    <?= $form->field($model, 'favorito')->textInput() ?>

    <?= $form->field($model, 'fija')->textInput() ?>

    <?= $form->field($model, 'batacazo')->textInput() ?>

    <?= $form->field($model, 'triplona')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuatriplona')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
