<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tombola */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="tombola-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'id_momento')->label('Momento')->hint('')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\TombolaMomento::find()->orderBy('id')->asArray()->all(), 'id', 'nombre'),
        'options' => ['placeholder' => 'Choose Tombola momento'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?php //echo $form->field($model, 'fecha')->textInput(['placeholder' => 'Fecha']) ?>

    <?php
    //chequeo si es un nuevo campo seteo fecha a la fecha actual.
    $model->isNewRecord ? $model->fecha = date('Y-m-d') : '';
    echo $form->field($model, 'fecha')->hint('')->widget(DatePicker::classname(),
        [
            'options' => ['placeholder' => 'Fecha de fin del certificado'],
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true,
            ]
        ]);


    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-th"></i> ' . Html::encode('Numeros de la Tombola'),
            'content' => $this->render('_formTombolaNumero', [
                'form' => $form,
                'TombolaNumero' => is_null($model->tombolaNumero) ? new app\models\TombolaNumero() : $model->tombolaNumero,
            ]),
        ],
    ];

    echo kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
