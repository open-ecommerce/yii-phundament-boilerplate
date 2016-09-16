<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SakilaActor]].
 *
 * @see SakilaActor
 */
class SakilaActorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SakilaActor[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SakilaActor|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
