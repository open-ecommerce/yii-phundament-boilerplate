<?php

namespace app\models;

use Yii;
use \app\models\base\SakilaCustomer as BaseSakilaCustomer;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sakila_customer".
 */
class SakilaCustomer extends BaseSakilaCustomer
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
