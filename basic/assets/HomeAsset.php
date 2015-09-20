<?php

namespace app\assets;

use yii\web\AssetBundle;

class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/site.css',
        'css/font-awesome.min.css',
        'js/fancybox/jquery.fancybox.css',
    ];
    public $js = [
        'js/classie.js',
        'js/bootstrap.min.js',
        'js/smoothscroll.js',
        'js/jquery.stellar.min.js',
        'js/fancybox/jquery.fancybox.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
