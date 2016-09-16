<?php
/* @var $this yii\web\View */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;

$bundle = AppAsset::register($this);
$imgPath = $bundle->baseUrl;

$this->title = 'Understanding Yii2 with Phundament';
?>
<div class="site-index">
    <div class="col-md-12">
        <h1 class="text-center">Proof of concept of Yii2 with Phundament !</h1>
        <br>
        <div class="container">
            <div class="col-md-12 text-center">
                <div>
                    <div id="hero">
                        <?= Html::img($imgPath . '/img/open-ecommerce-yii2-cms.png', ['alt' => 'Understanding Yii2 with Phundament']) ?>
                    </div>
                </div>
                <br>
                <p class="text-center"><i>First steps into the Yii2 framework...</i></p>
            </div>
        </div>
    </div>
</div>
<br>
<br>
