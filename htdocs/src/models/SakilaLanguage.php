<?php

namespace app\models;

use Yii;
use \app\models\base\SakilaLanguage as BaseSakilaLanguage;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sakila_language".
 */
class SakilaLanguage extends BaseSakilaLanguage
{
    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
             parent::rules(),
             [
                  # custom validation rules
             ]
        );
    }
}
