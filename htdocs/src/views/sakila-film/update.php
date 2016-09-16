<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\SakilaFilm $model
*/

$this->title = Yii::t('models', 'Sakila Film') . $model->title . ', ' . Yii::t('cruds', 'Edit');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Sakila Film'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->title, 'url' => ['view', 'film_id' => $model->film_id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud sakila-film-update">

    <h1>
        <?= Yii::t('models', 'Sakila Film') ?>
        <small>
                        <?= $model->title ?>        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . Yii::t('cruds', 'View'), ['view', 'film_id' => $model->film_id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
