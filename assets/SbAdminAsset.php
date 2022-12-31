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
class SbAdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'sbadmin/vendor/fontawesome-free/css/all.min.css',
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'sbadmin/css/sb-admin-2.min.css',
    ];
    public $js = [
        'sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'sbadmin/vendor/jquery-easing/jquery.easing.min.js',
        'sbadmin/js/sb-admin-2.min.js',
        'sbadmin/vendor/chart.js/Chart.min.js',
        'sbadmin/js/demo/chart-area-demo.js',
        'sbadmin/js/demo/chart-pie-demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}