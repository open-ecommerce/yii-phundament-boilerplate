<?php

namespace app\models;

use Yii;
use \app\models\base\SakilaStore as BaseSakilaStore;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sakila_store".
 */
class SakilaStore extends BaseSakilaStore
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
