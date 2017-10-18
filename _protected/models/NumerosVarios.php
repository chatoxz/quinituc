<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "numeros_varios".
 *
 * @property integer $id
 * @property integer $atrasado
 * @property integer $favorito
 * @property integer $fija
 * @property integer $batacazo
 * @property string $triplona
 * @property string $cuatriplona
 */
class NumerosVarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'numeros_varios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['atrasado', 'favorito', 'fija', 'batacazo'], 'integer'],
            [['triplona', 'cuatriplona'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'atrasado' => 'Atrasado',
            'favorito' => 'Favorito',
            'fija' => 'Fija',
            'batacazo' => 'Batacazo',
            'triplona' => 'Triplona',
            'cuatriplona' => 'Cuatriplona',
        ];
    }
}
