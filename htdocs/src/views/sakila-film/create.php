<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\SakilaFilm $model
*/

$this->title = Yii::t('cruds', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Sakila Films'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud sakila-film-create">

    <h1>
        <?= Yii::t('models', 'Sakila Film') ?>        <small>
                        <?= $model->title ?>        </small>
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
