<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TransType */

$this->title = 'Create Trans Type';
$this->params['breadcrumbs'][] = ['label' => 'Trans Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
