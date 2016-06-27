<?php

use app\models\Languages;
use app\models\Country;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datecontrol\DateControl;
use kartik\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */


?>

<?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="large-6 columns">
        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'gender')->dropDownList(['M' => 'Male', 'F' => 'Female', 'O' => 'Other'], ['prompt' => '- Choose Gender']) ?>
        <?= $form->field($model, 'marital_status')->dropDownList(['Maried' => 'Maried', 'Single' => 'Single'], ['prompt' => '- Choose Status']) ?>
        <?php
        echo $form->field($model, 'birthday')->widget(DateControl::classname(), [
            'type' => DateControl::FORMAT_DATE,
            'displayFormat' => 'php:d M Y',
            'saveFormat' => 'php:Y-m-d',
        ]);
        ?>  
        <?= $form->field($model, 'id_country')->dropDownList(ArrayHelper::map(Country::find()->orderBy('country_name')->all(), 'id', 'country_name')) ?>    
    </div>
    <div class="large-6 columns">
        <?= $form->field($model, 'address_line1')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'address_line2')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'postal_code')->textInput(['maxlength' => true]) ?>
    </div>       
</div>
<div class="row">
    <div class="large-12 columns">
        <?= $form->field($model, 'comments', ['template' => "Comments\n\n{input}\n{hint}\n{error}"])->textArea(array('rows' => 5, 'placeholder' => 'Elegibility comments and other important issues.')); ?>
    </div>       
</div>

<div class="form-group">
    <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-warning']) ?>        
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
</div>
<?php ActiveForm::end(); ?>
