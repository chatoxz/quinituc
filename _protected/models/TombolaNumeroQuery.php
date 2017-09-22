<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TombolaNumero]].
 *
 * @see TombolaNumero
 */
class TombolaNumeroQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TombolaNumero[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TombolaNumero|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}