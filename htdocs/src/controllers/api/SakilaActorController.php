<?php

namespace app\controllers\api;

/**
* This is the class for REST controller "SakilaActorController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class SakilaActorController extends \yii\rest\ActiveController
{
public $modelClass = 'app\models\SakilaActor';
}
