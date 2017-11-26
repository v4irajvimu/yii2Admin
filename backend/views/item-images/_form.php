<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ItemImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uploaded_at')->textInput() ?>

    <?= $form->field($model, 'is_main')->dropDownList([ 'MAIN' => 'MAIN', 'SUB' => 'SUB', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
