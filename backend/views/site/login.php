<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username', [
                    'options' => [
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template' => 
                        '{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>{error}{hint}']
                    )->textInput([
                    'autofocus' => true,
                    'placeholder'=>'Username',
                        'autocomplete'=> 'off'
                    ]) ?>

                <?= $form->field($model, 'password', [
                    'options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template' => 
                        '{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>{error}{hint}']
                )->passwordInput(['placeholder'=>'Password']) ?>
                <div class="row">
                    <div class="col-xs-8">
                      <div class="checkbox icheck">
                        <label>
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                        </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                    </div>
                    <!-- /.col -->
                  </div>

            <?php ActiveForm::end(); ?>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>