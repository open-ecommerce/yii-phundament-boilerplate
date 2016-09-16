<?php

namespace app\models;

use Yii;
use \app\models\base\SakilaCity as BaseSakilaCity;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sakila_city".
 */
class SakilaCity extends BaseSakilaCity
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
