<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Tombola */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tombola', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tombola-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Tombola'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">

            <?= Html::a('Modificar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?php
            $gridColumn = [
                ['attribute' => 'id', 'visible' => false],
                [
                    'attribute' => 'momento.nombre',
                    'label' => 'Momento',
                ],
                'fecha',
            ];
            echo DetailView::widget([
                'model' => $model,
                'attributes' => $gridColumn
            ]);
            ?>
        </div>
        <div class="col-md-8">
            <?= $this->render('_numeros_tombola', [
                'tombola_numeros' => $tombola_numeros,
            ]) ?>
        </div>
    </div>
</div>