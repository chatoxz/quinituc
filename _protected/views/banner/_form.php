<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(); ?>
    <label for="secciones">Secciones</label>
    <?php echo  Html::activeDropDownList($model,'id_seccion',$secciones , ['class' => 'form-control']) ?>
    <br>
    <?php //********* IMPORTANTE UNA VARIABLE ESTA CREADA EN LA CLASE PERSONA, public $file con elllla se carga el archivo ?>
    <?= $form->field($model, 'file')->fileInput()->label($model->foto ? $model->foto : '' ) ?>
    <?php //CARGAR LA IMAGEN SI ES QUE TIENE
    $dir = \Yii::getAlias('@webroot')."\img\banners\ ". $model->foto;
    $dir = str_replace(" ","",$dir);
    $options = [
        'width'=>'200px',
        'height'=>'auto',
        'alt' => $model->foto ? $model->foto : 'Sin foto',
    ];
    if($model->foto)
        echo  "<a href = '/img/banners/".$model->foto."' target='_blank' >".Html::img('@web/img/banners/'.$model->foto, $options). "</a></br></br>";
    else
        echo "No tiene foto cargada </br></br>" ;
    ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orden')->textInput() ?>

    <?= $form->field($model, 'link')->textInput()->hint('Formato http://www.google.com') ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
