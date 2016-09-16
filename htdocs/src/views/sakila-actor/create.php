<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\SakilaActor $model
*/

$this->title = Yii::t('cruds', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Sakila Actors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud sakila-actor-create">

    <h1>
        <?= Yii::t('models', 'Sakila Actor') ?>        <small>
                        <?= $model->actor_id ?>        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            Yii::t('cruds', 'Cancel'),
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
