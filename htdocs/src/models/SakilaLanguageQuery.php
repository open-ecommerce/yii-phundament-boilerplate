<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SakilaLanguage]].
 *
 * @see SakilaLanguage
 */
class SakilaLanguageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SakilaLanguage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SakilaLanguage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
