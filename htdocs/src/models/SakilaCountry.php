<?php

namespace app\models;

use Yii;
use \app\models\base\SakilaCountry as BaseSakilaCountry;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sakila_country".
 */
class SakilaCountry extends BaseSakilaCountry
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
