<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
    * @var app\models\SakilaFilmSearch $searchModel
*/



/**
* create action column template depending acces rights
*/
$actionColumnTemplates = [];

if (\Yii::$app->user->can('app_sakila-film_view', ['route' => true])) {
    $actionColumnTemplates[] = '{view}';
}

if (\Yii::$app->user->can('app_sakila-film_update', ['route' => true])) {
    $actionColumnTemplates[] = '{update}';
}

if (\Yii::$app->user->can('app_sakila-film_delete', ['route' => true])) {
    $actionColumnTemplates[] = '{delete}';
}
if (isset($actionColumnTemplates)) {
$actionColumnTemplate = implode(' ', $actionColumnTemplates);
    $actionColumnTemplateString = $actionColumnTemplate;
} else {
Yii::$app->view->params['pageButtons'] = Html::a('<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'New'), ['create'], ['class' => 'btn btn-success']);
    $actionColumnTemplateString = "{view} {update} {delete}";
}
?>
<div class="col-md-10 col-md-offset-1">

<div class="sakila-film-index">

    <?php //             echo $this->render('_search', ['model' =>$searchModel]);
        ?>

    
    <?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

    <h1>
        <?= Yii::t('models', 'Sakila Films') ?>        <small>
            List
        </small>
    </h1>
    <div class="clearfix crud-navigation">
<?php
if(\Yii::$app->user->can('app_sakila-film_create', ['route' => true])){
?>
        <div class="pull-left">
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'New'), ['create'], ['class' => 'btn btn-success']) ?>
        </div>
<?php
}
?>
        <div class="pull-right">

                                                                                                                                                                                                                            
            <?= 
            \yii\bootstrap\ButtonDropdown::widget(
            [
            'id' => 'giiant-relations',
            'encodeLabel' => false,
            'label' => '<span class="glyphicon glyphicon-paperclip"></span> ' . Yii::t('cruds', 'Relations'),
            'dropdown' => [
            'options' => [
            'class' => 'dropdown-menu-right'
            ],
            'encodeLabels' => false,
            'items' => [            [
                'url' => ['sakila-language/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-right">&nbsp;' . Yii::t('models', 'Sakila Language') . '</i>',
            ],            [
                'url' => ['sakila-language/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-right">&nbsp;' . Yii::t('models', 'Sakila Language') . '</i>',
            ],            [
                'url' => ['sakila-film-actor/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-right">&nbsp;' . Yii::t('models', 'Sakila Film Actor') . '</i>',
            ],            [
                'url' => ['sakila-actor/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-right">&nbsp;' . Yii::t('models', 'Sakila Actor') . '</i>',
            ],            [
                'url' => ['sakila-film-category/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-right">&nbsp;' . Yii::t('models', 'Sakila Film Category') . '</i>',
            ],            [
                'url' => ['sakila-category/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-right">&nbsp;' . Yii::t('models', 'Sakila Category') . '</i>',
            ],            [
                'url' => ['sakila-inventory/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-right">&nbsp;' . Yii::t('models', 'Sakila Inventory') . '</i>',
            ],]
            ],
            'options' => [
            'class' => 'btn-default'
            ]
            ]
            );
            ?>        </div>
    </div>

    <hr />

        
                
    
    
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'resizableColumns' => true,
                'showPageSummary' => false,
                'headerRowOptions' => ['class' => 'kartik-sheet-style'],
                'filterRowOptions' => ['class' => 'kartik-sheet-style'],
                'responsive' => true,
                'pjax' => true, 
                'pjaxSettings' => [
                    'neverTimeout' => true,
                ],
                'hover' => true,
                'panel' => [
                    'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> ' . $this->title . '</h3>',
                    'type' => 'primary',
                    'showFooter' => false
                ],
                'columns' => [ 			'title',
			// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'language_id',
			    'value' => function ($model) {
			        if ($rel = $model->getLanguage()->one()) {
			            return Html::a($rel->name, ['sakila-language/view', 'language_id' => $rel->language_id,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],
			[
			                'attribute'=>'rating',
			                'value' => function ($model) {
			                    return app\models\SakilaFilm::getRatingValueLabel($model->rating);
			                }    
			            ],
			'special_features',
			'release_year',
			'last_update',
			// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'original_language_id',
			    'value' => function ($model) {
			        if ($rel = $model->getOriginalLanguage()->one()) {
			            return Html::a($rel->name, ['sakila-language/view', 'language_id' => $rel->language_id,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],
			/*'rental_duration',*/
			/*'length',*/
			/*'rental_rate',*/
			/*'replacement_cost',*/
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => $actionColumnTemplateString,
            'urlCreator' => function($action, $model, $key, $index) {
                // using the column name as key, not mapping to 'id' like the standard generator
                $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
                $params[0] = \Yii::$app->controller->id ? \Yii::$app->controller->id . '/' . $action : $action;
                return Url::toRoute($params);
            },
            'contentOptions' => ['nowrap'=>'nowrap']
        ], ],
                // set export properties
                'export' => [
                    'fontAwesome' => true
                ],
                // set your toolbar
                'toolbar' => [
                    ['content' =>
                        Html::a('<i class="glyphicon glyphicon-plus"></i>  Create new ', ['create'], ['class' => 'btn btn-success']),
                    ],
                    '{export}',
                ],
        ]); ?>

</div>

</div>    

<?php \yii\widgets\Pjax::end() ?>


