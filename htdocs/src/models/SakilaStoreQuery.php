<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SakilaStore]].
 *
 * @see SakilaStore
 */
class SakilaStoreQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SakilaStore[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SakilaStore|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
