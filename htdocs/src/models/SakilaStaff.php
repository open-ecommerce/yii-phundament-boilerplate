<?php

namespace app\models;

use Yii;
use \app\models\base\SakilaStaff as BaseSakilaStaff;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sakila_staff".
 */
class SakilaStaff extends BaseSakilaStaff
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
