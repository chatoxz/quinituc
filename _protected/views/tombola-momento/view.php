<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TombolaMomento */
?>
<div class="tombola-momento-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nombre',
            'horario',
            /*'created_at',
            'created_by',
            'updated_at',
            'updated_by',*/
        ],
    ]) ?>

</div>
