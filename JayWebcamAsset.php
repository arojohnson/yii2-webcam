<?php

namespace Johnson;

use yii\web\AssetBundle;
use yii\web\View;

class JayWebcamAsset extends AssetBundle {

    public $js = [
        'js/jaywebcam.js'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init() {
        //Initiate the asset bundle at the beginning of body
        $this->jsOptions['position'] = View::POS_BEGIN;
        // Tell AssetBundle where the assets files are
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }

}
