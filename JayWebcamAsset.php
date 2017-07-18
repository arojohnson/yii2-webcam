<?php

namespace Johnson;

use yii\web\AssetBundle;

class JayWebcamAsset extends AssetBundle {

    public $js = [
        'js/jaywebcam.js'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init() {
        // Tell AssetBundle where the assets files are
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }

}
