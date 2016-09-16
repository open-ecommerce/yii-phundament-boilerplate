<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SakilaFilmText]].
 *
 * @see SakilaFilmText
 */
class SakilaFilmTextQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SakilaFilmText[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SakilaFilmText|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
