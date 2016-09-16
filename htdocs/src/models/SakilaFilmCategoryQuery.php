<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SakilaFilmCategory]].
 *
 * @see SakilaFilmCategory
 */
class SakilaFilmCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SakilaFilmCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SakilaFilmCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
