<?php

namespace app\models;

use Yii;
use \app\models\base\Persona as BasePersona;

/**
 * This is the model class for table "persona".
 */
class Persona extends BasePersona
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['nombre', 'apellido'], 'required'],
            [['telefono', 'created_by', 'updated_by'], 'integer'],
            [['fecha_nacimiento', 'created_at', 'updated_at'], 'safe'],
            [['nombre', 'apellido'], 'string', 'max' => 45]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'telefono' => 'Telefono',
            'fecha_nacimiento' => 'Fecha Nacimiento',
        ];
    }
}
