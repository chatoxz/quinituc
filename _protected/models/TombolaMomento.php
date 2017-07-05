<?php

namespace app\models;

use Yii;
use \app\models\base\TombolaMomento as BaseTombolaMomento;

/**
 * This is the model class for table "tombola_momento".
 */
class TombolaMomento extends BaseTombolaMomento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['nombre'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['nombre', 'horario'], 'string', 'max' => 45]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'horario' => Yii::t('app', 'Horario'),
        ];
    }
}
