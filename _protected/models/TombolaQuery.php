<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tombola]].
 *
 * @see Tombola
 */
class TombolaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Tombola[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Tombola|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}