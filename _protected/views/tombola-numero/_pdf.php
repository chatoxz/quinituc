<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\TombolaNumero */

$this->title = $model->id_tombola;
$this->params['breadcrumbs'][] = ['label' => 'Tombola Numeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tombola-numero-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Tombola Numero'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        [
                'attribute' => 'tombola.id',
                'label' => 'Id Tombola'
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
