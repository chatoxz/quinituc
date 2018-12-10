<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use Yii;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Nenad Zivkovic <nenad@freetuts.org>
 * 
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';

    public $css = [
        //'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css',
        //'css/bootstrap.min.css',
        //'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'css/style.css',
    ];

    public $js = [
        'js/facebook.js',
        'js/main.js',
    ];

    public $depends = [
        //..\vendor\yiisoft\yii2\web\YiiAsset.php
        'yii\web\YiiAsset',
        //..\vendor\yiisoft\yii2-bootstrap\BootstrapAsset.php
        'yii\bootstrap\BootstrapAsset',
    ];
}
