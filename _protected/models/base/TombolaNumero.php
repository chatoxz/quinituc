<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "tombola_numero".
 *
 * @property integer $id
 * @property integer $id_tombola
 * @property integer $numero_1
 * @property integer $numero_2
 * @property integer $numero_3
 * @property integer $numero_4
 * @property integer $numero_5
 * @property integer $numero_6
 * @property integer $numero_7
 * @property integer $numero_8
 * @property integer $numero_9
 * @property integer $numero_10
 * @property integer $numero_11
 * @property integer $numero_12
 * @property integer $numero_13
 * @property integer $numero_14
 * @property integer $numero_15
 * @property integer $numero_16
 * @property integer $numero_17
 * @property integer $numero_18
 * @property integer $numero_19
 * @property integer $numero_20
 *
 * @property \app\models\Tombola $tombola
 */
class TombolaNumero extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tombola'], 'required'],
            [['id_tombola', 'numero_1', 'numero_2', 'numero_3', 'numero_4', 'numero_5', 'numero_6', 'numero_7', 'numero_8', 'numero_9', 'numero_10', 'numero_11', 'numero_12', 'numero_13', 'numero_14', 'numero_15', 'numero_16', 'numero_17', 'numero_18', 'numero_19', 'numero_20'], 'integer'],
            [['id_tombola'], 'unique']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tombola_numero';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
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
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTombola()
    {
        return $this->hasOne(\app\models\Tombola::className(), ['id' => 'id_tombola']);
    }
    
    /**
     * @inheritdoc
     * @return \app\models\TombolaNumeroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\TombolaNumeroQuery(get_called_class());
    }
}
