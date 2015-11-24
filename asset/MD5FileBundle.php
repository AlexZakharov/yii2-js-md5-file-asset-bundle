<?php
namespace kfosoft\yii2\asset;

use yii\web\AssetBundle;

/**
 * @package app\services
 * @version 1.0
 * @copyright (c) 2014-2015 KFOSoftware Team <kfosoftware@gmail.com>
 */
class MD5FileBundle extends AssetBundle
{
    /** @var string path to source folder */
    public $sourcePath = '@vendor/kfosoft/yii2-js-md5-file-asset-bundle/asset/assets';

    /** @var array js files. */
    public $js = [
        'js/md5-file.js'
    ];

    /** @var array depends assets. */
    public $depends = [
        'kfosoft\yii2\asset\SparkMD5Bundle',
    ];
}
