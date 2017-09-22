<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Banner */
?>
<div class="banner-view">
 <?php $dir_imagen = \yii\helpers\Url::to('@web/../img//banners/'.$model->foto); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'seccion.nombre',
                'label' => 'Secccion',
            ],
            [
                'attribute'=>'Nombre Archivo',
                'value' => function ($data) {
                    return utf8_decode($data->foto);
                }
            ],
            [
                'attribute'=>'Foto',
                'value'=> $dir_imagen,
                'format' => ['image',[
                    'width'=>'300',
                    'height'=>'auto',
                    'alt' => 'Sin imagen',
                    'onclick'=> "window.open('../$dir_imagen', '_blank')",
                ]
                ]
            ],
            'orden',
            'link',
        ],
    ]) ?>

</div>
