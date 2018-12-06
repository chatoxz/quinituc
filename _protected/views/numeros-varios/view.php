<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NumerosVarios */
?>
<div class="numeros-varios-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'atrasado',
            'favorito',
            'fija',
            'batacazo',
            'triplona',
            'cuatriplona',
            'suerte',
        ],
    ]) ?>

</div>