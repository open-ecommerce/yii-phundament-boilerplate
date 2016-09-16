<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "SakilaFilmController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class SakilaFilmController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\SakilaFilm';
}
