<?php

namespace app\models;

use Yii;
use \app\models\base\SakilaFilmActor as BaseSakilaFilmActor;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sakila_film_actor".
 */
class SakilaFilmActor extends BaseSakilaFilmActor
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
