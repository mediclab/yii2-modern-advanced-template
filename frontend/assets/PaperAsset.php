<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class PaperAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//fonts.googleapis.com/css?family=Montserrat:400,700,200',
        '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'css/paper-kit.min.css',
    ];
    public $js = [
        'js/plugins/moment.min.js',
        'js/plugins/bootstrap-datepicker.js',
        'js/plugins/bootstrap-switch.js',
        'js/plugins/nouislider.min.js',
        'js/paper-kit.js'
    ];
    public $depends = [
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}
