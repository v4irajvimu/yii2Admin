<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
        'resources/bootstrap/dist/css/bootstrap.min.css',
        'resources/font-awesome/css/font-awesome.min.css',
        'resources/Ionicons/css/ionicons.min.css',
        
        'resources/dist/css/AdminLTE.min.css',
        'resources/dist/css/skins/_all-skins.min.css',
        'resources/morris.js/morris.css',
        'resources/jvectormap/jquery-jvectormap.css',
        'resources/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'resources/bootstrap-daterangepicker/daterangepicker.css',
        'resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'css/site.css',
    ];
    public $js = [
        'resources/jquery-ui/jquery-ui.min.js',
        'resources/bootstrap/dist/js/bootstrap.min.js',
        'resources/raphael/raphael.min.js',
        'resources/morris.js/morris.min.js',
        'resources/jquery-sparkline/dist/jquery.sparkline.min.js',
        'resources/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'resources/jvectormap/jquery-jvectormap-world-mill-en.js',
        'resources/jquery-knob/dist/jquery.knob.min.js',
        'resources/moment/min/moment.min.js',
        'resources/bootstrap-daterangepicker/daterangepicker.js',
        'resources/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'resources/jquery-slimscroll/jquery.slimscroll.min.js',
        'resources/fastclick/lib/fastclick.js',
        'resources/dist/js/adminlte.min.js',
        'resources/dist/js/pages/dashboard.js',
        'resources/dist/js/demo.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );  
}