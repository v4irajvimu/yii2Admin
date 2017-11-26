<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'resources/bootstrap/dist/css/bootstrap.min.css',
        'resources/font-awesome/css/font-awesome.min.css',
        'resources/Ionicons/css/ionicons.min.css',
        'resources/dist/css/AdminLTE.min.css',
        'resources/plugins/iCheck/square/blue.css',
        'css/login.css',
    ];
    public $js = [
        //'resources/jquery/dist/jquery.min.js',
        'resources/bootstrap/dist/js/bootstrap.min.js',
        'resources/plugins/iCheck/icheck.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );  
}
