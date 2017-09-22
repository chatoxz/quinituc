<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property integer $id_seccion
 * @property string $foto
 * @property string $nombre
 * @property string $link
 * @property integer $orden
 *
 * @property Seccion $idSeccion
 */
class Banner extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_seccion', 'orden'], 'integer'],
            [['foto', 'nombre'], 'required'],
            [['foto', 'nombre','link'], 'string', 'max' => 255],
            [['id_seccion'], 'safe',],
            //[['id_seccion'], 'exist', 'skipOnError' => true, 'targetClass' => Seccion::className(), 'targetAttribute' => ['id_seccion' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_seccion' => 'Id Seccion',
            'foto' => 'Foto',
            'nombre' => 'Nombre',
            'orden' => 'Orden',
            'link' => 'Link',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeccion()
    {
        return $this->hasOne(Seccion::className(), ['id' => 'id_seccion']);
    }
}
