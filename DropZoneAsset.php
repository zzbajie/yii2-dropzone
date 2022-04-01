<?php

namespace zzbajie\dropzone;

use yii\web\AssetBundle;

class DropZoneAsset extends AssetBundle
{

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . '/dist/';
    }

    public $css = [
        'min/dropzone.min.css',
    ];

    public $js = [
        'min/dropzone.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
