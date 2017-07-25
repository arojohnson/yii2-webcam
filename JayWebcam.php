<?php
/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 * @package - Johnson
 * JayWebcam widget for yii framework version 2.x.x to capture images from desktop/mobile webcam through browser. 
 * It uses native html 5 features to get the media object from the device the browser running
 */
namespace Johnson;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 */
class JayWebcam extends \yii\base\Widget {

    public $width = 640, $height = 480, $cssClass = '', $id = '', $imgID = '';

    public function init() {
        parent::init();
        JayWebcamAsset::register($this->getView());
    }

    public function run() {
        $id = md5(uniqid());
        $eleID = ($this->id) ? $this->id : $id;
        return $this->render('webcam', ['canvasID' => $id . '_canvas', 'videoID' => $id . '_video', 'buttonID' => $id . '_button', 'width' => $this->width, 'height' => $this->height,
                    'cssClass' => $this->cssClass, 'eleID' => $eleID, 'id' => $id, 'imgID' => $this->imgID]);
    }

}
