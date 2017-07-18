<?php

namespace Johnson;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 */
class JayWebcam extends \yii\base\Widget {

    public function init() {
        parent::init();
        JayWebcamAsset::register($this->getView());
    }

    public function run() {
        $id = md5(uniqid());

        return $this->render('webcam', ['canvasID' => $id . '_canvas', 'videoID' => $id . '_video', 'buttonID' => $id . '_button']);
    }

}
