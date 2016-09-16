<?php

namespace app\models;

use Yii;
use \app\models\base\SakilaAddress as BaseSakilaAddress;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sakila_address".
 */
class SakilaAddress extends BaseSakilaAddress
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
