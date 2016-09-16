<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\SakilaActor $model
*/
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'Sakila Actor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Sakila Actors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->actor_id, 'url' => ['view', 'actor_id' => $model->actor_id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'View');
?>
<div class="giiant-crud sakila-actor-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= Yii::t('models', 'Sakila Actor') ?>        <small>
            <?= $model->actor_id ?>        </small>
    </h1>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a(
            '<span class="glyphicon glyphicon-pencil"></span> ' . Yii::t('cruds', 'Edit'),
            [ 'update', 'actor_id' => $model->actor_id],
            ['class' => 'btn btn-info']) ?>

            <?= Html::a(
            '<span class="glyphicon glyphicon-copy"></span> ' . Yii::t('cruds', 'Copy'),
            ['create', 'actor_id' => $model->actor_id, 'SakilaActor'=>$copyParams],
            ['class' => 'btn btn-success']) ?>

            <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'New'),
            ['create'],
            ['class' => 'btn btn-success']) ?>
        </div>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> '
            . Yii::t('cruds', 'Full list'), ['index'], ['class'=>'btn btn-default']) ?>
        </div>

    </div>

    <hr />

    <?php $this->beginBlock('app\models\SakilaActor'); ?>

    
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'actor_id',
        'first_name',
        'last_name',
        'last_update',
    ],
    ]); ?>

    
    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . Yii::t('cruds', 'Delete'), ['delete', 'actor_id' => $model->actor_id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . Yii::t('cruds', 'Are you sure to delete this item?') . '',
    'data-method' => 'post',
    ]); ?>
    <?php $this->endBlock(); ?>


    
<?php $this->beginBlock('Films'); ?>
<div style='position: relative'><div style='position:absolute; right: 0px; top: 0px;'>
  <?= Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . Yii::t('cruds', 'List All') . ' Films',
            ['sakila-film/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'New') . ' Film',
            ['sakila-film/create', 'SakilaFilm' => ['film_id' => $model->actor_id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-link"></span> ' . Yii::t('cruds', 'Attach') . ' Film', ['sakila-film-actor/create', 'SakilaFilmActor'=>['actor_id'=>$model->actor_id]],
            ['class'=>'btn btn-info btn-xs']
        ) ?>
</div></div><?php Pjax::begin(['id'=>'pjax-Films', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Films ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">' . \yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getSakilaFilmActors(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-sakilafilmactors']]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => Yii::t('cruds', 'First'),
        'lastPageLabel'  => Yii::t('cruds', 'Last')
    ],
    'columns' => [[
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {delete}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function ($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'sakila-film-actor' . '/' . $action;
        return $params;
    },
    'buttons'    => [
        'delete' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                    'class' => 'text-danger',
                    'title'         => Yii::t('cruds', 'Remove'),
                    'data-confirm'  => Yii::t('cruds', 'Are you sure you want to delete the related item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]);
            },
'view' => function ($url, $model) {
                return Html::a(
                    '<span class="glyphicon glyphicon-cog"></span>',
                    $url,
                    [
                        'data-title'  => Yii::t('cruds', 'View Pivot Record'),
                        'data-toggle' => 'tooltip',
                        'data-pjax'   => '0',
                        'class'       => 'text-muted',
                    ]
                );
            },
    ],
    'controller' => 'sakila-film-actor'
],
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::columnFormat
[
    'class' => yii\grid\DataColumn::className(),
    'attribute' => 'film_id',
    'value' => function ($model) {
        if ($rel = $model->getFilm()->one()) {
            return Html::a($rel->title, ['sakila-film/view', 'film_id' => $rel->film_id,], ['data-pjax' => 0]);
        } else {
            return '';
        }
    },
    'format' => 'raw',
],
        'last_update',
]
]) . '</div>' ?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


    <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [ [
    'label'   => '<b class=""># '.$model->actor_id.'</b>',
    'content' => $this->blocks['app\models\SakilaActor'],
    'active'  => true,
],[
    'content' => $this->blocks['Films'],
    'label'   => '<small>Films <span class="badge badge-default">'.count($model->getFilms()->asArray()->all()).'</span></small>',
    'active'  => false,
], ]
                 ]
    );
    ?>
</div>
