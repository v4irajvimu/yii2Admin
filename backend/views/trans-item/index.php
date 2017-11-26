<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TransItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trans Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trans Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'qty_in',
            'qty_out',
            'trans_type_id',
            'item_id',
            // 'branch_id',
            // 'created_at',
            // 'updatetd_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
