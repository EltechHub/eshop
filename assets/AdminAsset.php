<?php

namespace app\assets;

use yii\web\AssetBundle;


class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        'css/site.css',
        'css/main.css'
    ];

    public $js = [
       // 'js/jquery.js',
        'js/bootstrap.min.js',

    ];
   

    public $depends = [
      'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
