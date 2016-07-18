<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\OutcomeCategory $model
*/

$this->title = Yii::t('app', 'OutcomeCategory') . $model->id . ', ' . Yii::t('app', 'Edit');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'OutcomeCategories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Edit');
?>
<div class="container">
<div class="col-md-12">
<div class="giiant-crud outcome-category-update">
    <h3>
        <?= Yii::t('app', 'OutcomeCategory') ?>
        <small>
                        <?= $model->id ?>        </small>
    </h3>
    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . Yii::t('app', 'View'), ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
</div>
