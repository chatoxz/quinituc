<?php

use yii\widgets\DetailView;
//var_dump($tombola_numeros);
$gridColumn2 = [
    ['attribute' => 'id', 'visible' => false],
  /*  [
        'attribute' => 'tombola.id',
        'label' => Yii::t('app', 'Id Tombola'),
    ],*/
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
    'model' => $tombola_numeros,
    'attributes' => $gridColumn2
]);

?>


