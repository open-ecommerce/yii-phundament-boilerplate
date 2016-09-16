<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SakilaRental]].
 *
 * @see SakilaRental
 */
class SakilaRentalQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SakilaRental[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SakilaRental|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
