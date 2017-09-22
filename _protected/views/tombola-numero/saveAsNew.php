<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TombolaNumero */

$this->title = 'Save As New Tombola Numero: '. ' ' . $model->id_tombola;
$this->params['breadcrumbs'][] = ['label' => 'Tombola Numeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tombola, 'url' => ['view', 'id' => $model->id_tombola]];
$this->params['breadcrumbs'][] = 'Save As New';
?>
<div class="tombola-numero-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
