<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\models\SakilaActor $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="sakila-actor-form">

    <?php $form = ActiveForm::begin([
    'id' => 'SakilaActor',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-error'
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            
			<?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'last_update')->textInput() ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                   'encodeLabels' => false,
                     'items' => [ [
    'label'   => Yii::t('models', StringHelper::basename('app\models\SakilaActor')),
    'content' => $this->blocks['main'],
    'active'  => true,
], ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? Yii::t('cruds', 'Create') : Yii::t('cruds', 'Save')),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

