<?php

namespace app\models;

use Yii;
use \app\models\base\Empleado as BaseEmpleado;

/**
 * This is the model class for table "empleado".
 */
class Empleado extends BaseEmpleado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_persona'], 'required'],
            [['id_persona', 'created_by', 'updated_by'], 'integer'],
            [['fecha_ingreso', 'created_at', 'updated_at'], 'safe'],
            [['sueldo'], 'number'],
            [['cargo'], 'string', 'max' => 155]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => 'ID',
            'id_persona' => 'Id Persona',
            'cargo' => 'Cargo',
            'fecha_ingreso' => 'Fecha Ingreso',
            'sueldo' => 'Sueldo',
        ];
    }
}
