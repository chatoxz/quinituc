<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\TombolaNumero */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tombola Numero'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tombola-numero-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Tombola Numero').' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">

            <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
        <?php
        $gridColumn = [
            ['attribute' => 'id', 'visible' => false],
            [
                'attribute' => 'tombola.id',
                'label' => Yii::t('app', 'Id Tombola'),
            ],
            'numero_1',
            'numero_2',
            'numero_3',
            'numero_4',
            'numero_5',
            'numero_6',
            'numero_7',
            'numero_8',
            'numero_9',
            'numero_10',
            'numero_11',
            'numero_12',
            'numero_13',
            'numero_14',
            'numero_15',
            'numero_16',
            'numero_17',
            'numero_18',
            'numero_19',
            'numero_20',
        ];
        echo DetailView::widget([
            'model' => $model,
            'attributes' => $gridColumn
        ]);
        ?>
    </div>
</div>
