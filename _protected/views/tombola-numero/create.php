<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TombolaNumero */

$this->title = Yii::t('app', 'Create Tombola Numero');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tombola Numero'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tombola-numero-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
