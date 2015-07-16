<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\models\PodruzkaProduct;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PodruzkaProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $product array */

$this->title = 'Информационный продукт';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="podruzka-product-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'article',
            [
                'attribute'=>'group',
                'filter'=> ArrayHelper::map((new PodruzkaProduct)->getListGroup(), 'group', 'group'),
            ],
            [
                'attribute'=>'category',
                'filter'=> ArrayHelper::map((new PodruzkaProduct)->getListCategory(), 'category', 'category'),
            ],
            [
                'attribute'=>'sub_category',
                'filter'=> ArrayHelper::map((new PodruzkaProduct)->getListSubCategory(), 'sub_category', 'sub_category'),
            ],
            [
                'attribute'=>'detail',
                'filter'=> ArrayHelper::map((new PodruzkaProduct)->getListDetail(), 'detail', 'detail'),
            ],
            [
                'attribute'=>'brand',
                'filter'=> ArrayHelper::map((new PodruzkaProduct)->getListBrand(), 'brand', 'brand'),
            ],
            [
                'attribute'=>'sub_brand',
                'filter'=> ArrayHelper::map((new PodruzkaProduct)->getListSubBrand(), 'sub_brand', 'sub_brand'),
            ],
            [
                'attribute'=>'line',
                'filter'=> ArrayHelper::map((new PodruzkaProduct)->getListLine(), 'line', 'line'),
            ],
             'price',
             'ma_price',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
