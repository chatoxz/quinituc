<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "empleado".
 *
 * @property integer $id
 * @property integer $id_persona
 * @property string $cargo
 * @property string $fecha_ingreso
 * @property double $sueldo
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property \app\models\Persona $persona
 */
class Empleado extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_persona'], 'required'],
            [['id_persona', 'created_by', 'updated_by'], 'integer'],
            [['fecha_ingreso', 'created_at', 'updated_at'], 'safe'],
            [['sueldo'], 'number'],
            [['cargo'], 'string', 'max' => 155]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_persona' => 'Id Persona',
            'cargo' => 'Cargo',
            'fecha_ingreso' => 'Fecha Ingreso',
            'sueldo' => 'Sueldo',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersona()
    {
        return $this->hasOne(\app\models\Persona::className(), ['id' => 'id_persona']);
    }
    
/**
     * @inheritdoc
     * @return array mixed
     */ 
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\EmpleadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\EmpleadoQuery(get_called_class());
    }
}
