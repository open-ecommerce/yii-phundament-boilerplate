<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SakilaCountry]].
 *
 * @see SakilaCountry
 */
class SakilaCountryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SakilaCountry[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SakilaCountry|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
