<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SakilaStaff]].
 *
 * @see SakilaStaff
 */
class SakilaStaffQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SakilaStaff[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SakilaStaff|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
