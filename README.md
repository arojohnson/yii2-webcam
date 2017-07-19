Yii 2 - Web cam input
=====================
Capture and upload the image through system / Mobile web cam basic html5 native features. The current release only captures the image from webcam and shows the image in a div. If the desktop does not has webcam obviously can't use this extension any more.. LOL.

Note:
-------

In the localhost chrome browser may not work due to https restrictions. When it goes to production the web app must be in https to work at all platforms.
You may test the functionality at FireFox browser.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

php composer.phar require --prefer-dist johnson/yii2-webcam "*"

or add

"johnson/yii2-webcam": "*"

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :


<?= \Johnson\JayWebcam::widget(); ?>
