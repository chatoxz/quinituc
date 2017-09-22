<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tombola */

$this->title = 'Create Tombola';
$this->params['breadcrumbs'][] = ['label' => 'Tombola', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tombola-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
