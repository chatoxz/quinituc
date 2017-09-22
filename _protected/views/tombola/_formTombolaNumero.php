<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TombolaNumero */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="tombola-form">

        <?= $form->field($TombolaNumero, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <div style="display: flex;flex-wrap: wrap; justify-content: space-around">

        <?= $form->field($TombolaNumero, 'numero_1')->textInput(['placeholder' => 'Numero 1'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_2')->textInput(['placeholder' => 'Numero 2'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_3')->textInput(['placeholder' => 'Numero 3'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_4')->textInput(['placeholder' => 'Numero 4'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_5')->textInput(['placeholder' => 'Numero 5'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_6')->textInput(['placeholder' => 'Numero 6'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_7')->textInput(['placeholder' => 'Numero 7'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_8')->textInput(['placeholder' => 'Numero 8'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_9')->textInput(['placeholder' => 'Numero 9'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_10')->textInput(['placeholder' => 'Numero 10'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_11')->textInput(['placeholder' => 'Numero 11'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_12')->textInput(['placeholder' => 'Numero 12'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_13')->textInput(['placeholder' => 'Numero 13'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_14')->textInput(['placeholder' => 'Numero 14'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_15')->textInput(['placeholder' => 'Numero 15'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_16')->textInput(['placeholder' => 'Numero 16'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_17')->textInput(['placeholder' => 'Numero 17'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_18')->textInput(['placeholder' => 'Numero 18'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_19')->textInput(['placeholder' => 'Numero 19'])->hint('') ?>

        <?= $form->field($TombolaNumero, 'numero_20')->textInput(['placeholder' => 'Numero 20'])->hint('') ?>
    </div>
</div>
