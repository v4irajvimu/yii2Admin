<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TransItem */

$this->title = 'Create Trans Item';
$this->params['breadcrumbs'][] = ['label' => 'Trans Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
