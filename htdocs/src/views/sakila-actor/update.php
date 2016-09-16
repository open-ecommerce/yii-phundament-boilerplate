<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\SakilaActor $model
*/

$this->title = Yii::t('models', 'Sakila Actor') . $model->actor_id . ', ' . Yii::t('cruds', 'Edit');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Sakila Actor'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->actor_id, 'url' => ['view', 'actor_id' => $model->actor_id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud sakila-actor-update">

    <h1>
        <?= Yii::t('models', 'Sakila Actor') ?>
        <small>
                        <?= $model->actor_id ?>        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . Yii::t('cruds', 'View'), ['view', 'actor_id' => $model->actor_id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
