<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TombolaNumeroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-tombola-numero-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'id_tombola')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Tombola::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => Yii::t('app', 'Choose Tombola')],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'numero_1')->textInput(['placeholder' => 'Numero 1']) ?>

    <?= $form->field($model, 'numero_2')->textInput(['placeholder' => 'Numero 2']) ?>

    <?= $form->field($model, 'numero_3')->textInput(['placeholder' => 'Numero 3']) ?>

    <?php /* echo $form->field($model, 'numero_4')->textInput(['placeholder' => 'Numero 4']) */ ?>

    <?php /* echo $form->field($model, 'numero_5')->textInput(['placeholder' => 'Numero 5']) */ ?>

    <?php /* echo $form->field($model, 'numero_6')->textInput(['placeholder' => 'Numero 6']) */ ?>

    <?php /* echo $form->field($model, 'numero_7')->textInput(['placeholder' => 'Numero 7']) */ ?>

    <?php /* echo $form->field($model, 'numero_8')->textInput(['placeholder' => 'Numero 8']) */ ?>

    <?php /* echo $form->field($model, 'numero_9')->textInput(['placeholder' => 'Numero 9']) */ ?>

    <?php /* echo $form->field($model, 'numero_10')->textInput(['placeholder' => 'Numero 10']) */ ?>

    <?php /* echo $form->field($model, 'numero_11')->textInput(['placeholder' => 'Numero 11']) */ ?>

    <?php /* echo $form->field($model, 'numero_12')->textInput(['placeholder' => 'Numero 12']) */ ?>

    <?php /* echo $form->field($model, 'numero_13')->textInput(['placeholder' => 'Numero 13']) */ ?>

    <?php /* echo $form->field($model, 'numero_14')->textInput(['placeholder' => 'Numero 14']) */ ?>

    <?php /* echo $form->field($model, 'numero_15')->textInput(['placeholder' => 'Numero 15']) */ ?>

    <?php /* echo $form->field($model, 'numero_16')->textInput(['placeholder' => 'Numero 16']) */ ?>

    <?php /* echo $form->field($model, 'numero_17')->textInput(['placeholder' => 'Numero 17']) */ ?>

    <?php /* echo $form->field($model, 'numero_18')->textInput(['placeholder' => 'Numero 18']) */ ?>

    <?php /* echo $form->field($model, 'numero_19')->textInput(['placeholder' => 'Numero 19']) */ ?>

    <?php /* echo $form->field($model, 'numero_20')->textInput(['placeholder' => 'Numero 20']) */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
