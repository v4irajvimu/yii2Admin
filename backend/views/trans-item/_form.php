<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TransItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trans-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'qty_in')->textInput() ?>

    <?= $form->field($model, 'qty_out')->textInput() ?>

    <?= $form->field($model, 'trans_type_id')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'branch_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updatetd_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
