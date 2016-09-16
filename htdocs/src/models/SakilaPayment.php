<?php

namespace app\models;

use Yii;
use \app\models\base\SakilaPayment as BaseSakilaPayment;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sakila_payment".
 */
class SakilaPayment extends BaseSakilaPayment
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
