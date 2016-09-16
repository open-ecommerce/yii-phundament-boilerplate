<?php

namespace app\models;

use Yii;
use \app\models\base\SakilaRental as BaseSakilaRental;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sakila_rental".
 */
class SakilaRental extends BaseSakilaRental
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
