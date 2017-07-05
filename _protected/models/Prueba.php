<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prueba".
 *
 * @property integer $id_prueba
 * @property string $nombre
 * @property integer $telefono
 * @property string $fecha_nacimiento
 * @property string $observacion
 */
class Prueba extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prueba';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['telefono'], 'integer'],
            [['fecha_nacimiento'], 'safe'],
            [['nombre'], 'string', 'max' => 45],
            [['observacion'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_prueba' => 'Id Prueba',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'observacion' => 'Observacion',
        ];
    }
}
