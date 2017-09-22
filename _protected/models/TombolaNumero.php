<?php

namespace app\models;

use Yii;
use \app\models\base\TombolaNumero as BaseTombolaNumero;

/**
 * This is the model class for table "tombola_numero".
 */
class TombolaNumero extends BaseTombolaNumero
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_tombola'], 'required'],
            [['id_tombola', 'numero_1', 'numero_2', 'numero_3', 'numero_4', 'numero_5', 'numero_6', 'numero_7', 'numero_8', 'numero_9', 'numero_10', 'numero_11', 'numero_12', 'numero_13', 'numero_14', 'numero_15', 'numero_16', 'numero_17', 'numero_18', 'numero_19', 'numero_20'], 'integer'],
            [['id_tombola'], 'unique']
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_tombola' => Yii::t('app', 'Id Tombola'),
            'numero_1' => Yii::t('app', 'Numero 1'),
            'numero_2' => Yii::t('app', 'Numero 2'),
            'numero_3' => Yii::t('app', 'Numero 3'),
            'numero_4' => Yii::t('app', 'Numero 4'),
            'numero_5' => Yii::t('app', 'Numero 5'),
            'numero_6' => Yii::t('app', 'Numero 6'),
            'numero_7' => Yii::t('app', 'Numero 7'),
            'numero_8' => Yii::t('app', 'Numero 8'),
            'numero_9' => Yii::t('app', 'Numero 9'),
            'numero_10' => Yii::t('app', 'Numero 10'),
            'numero_11' => Yii::t('app', 'Numero 11'),
            'numero_12' => Yii::t('app', 'Numero 12'),
            'numero_13' => Yii::t('app', 'Numero 13'),
            'numero_14' => Yii::t('app', 'Numero 14'),
            'numero_15' => Yii::t('app', 'Numero 15'),
            'numero_16' => Yii::t('app', 'Numero 16'),
            'numero_17' => Yii::t('app', 'Numero 17'),
            'numero_18' => Yii::t('app', 'Numero 18'),
            'numero_19' => Yii::t('app', 'Numero 19'),
            'numero_20' => Yii::t('app', 'Numero 20'),
        ];
    }
}
