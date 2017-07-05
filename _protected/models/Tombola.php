<?php

namespace app\models;

use Yii;
use \app\models\base\Tombola as BaseTombola;

/**
 * This is the model class for table "tombola".
 */
class Tombola extends BaseTombola
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_momento'], 'required'],
            [['id_momento', 'created_by', 'updated_by'], 'integer'],
            [['fecha', 'created_at', 'updated_at'], 'safe']
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_momento' => Yii::t('app', 'Id Momento'),
            'fecha' => Yii::t('app', 'Fecha'),
        ];
    }
}
