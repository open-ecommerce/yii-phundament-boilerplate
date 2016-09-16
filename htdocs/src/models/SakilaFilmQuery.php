<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SakilaFilm]].
 *
 * @see SakilaFilm
 */
class SakilaFilmQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SakilaFilm[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SakilaFilm|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
