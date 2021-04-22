<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/toko/';
    public $css = [
        'css/bootstrap.css',
        'css/style.css',
        'css/nav.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.easydropdown.js',
        'js/scripts.js',
        'js/move-top.js',
        'js/easing.js',
        'js/responsiveslides.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
