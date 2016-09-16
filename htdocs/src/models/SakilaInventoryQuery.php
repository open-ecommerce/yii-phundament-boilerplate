<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SakilaInventory]].
 *
 * @see SakilaInventory
 */
class SakilaInventoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SakilaInventory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SakilaInventory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
