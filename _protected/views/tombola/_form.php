<?php
use app\models\TombolaMomento;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tombola */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tombola-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // echo $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'id_momento')->label('Horario')->dropDownList(
        ArrayHelper::map(TombolaMomento::find()->all(), 'id','nombre'))
    ?>

    <?php /*
        echo $form->field($model, 'fecha')->textInput()
        echo$form->field($model, 'created_at')->textInput() ?>
        echo $form->field($model, 'created_by')->textInput()
        echo $form->field($model, 'updated_at')->textInput()
        echo $form->field($model, 'updated_by')->textInput()
        */
    ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
