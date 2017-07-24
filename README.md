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
~~~
<?= \Johnson\JayWebcam::widget(); ?>
~~~

If you pass the ID of the input element then the base64 encoded image data will be stored in the "value" attribute of the element after taking the snapshot.

If you want to show the thumbnail to the users then you can give the "imgID" property i.e the <img> tag id attribute value. Then the widget will assign the base64 encoded image into the element.

For Example:
PHP Code
~~~
<?= \Johnson\JayWebcam::widget(['id' => $YourID,'imgID' => $imgID]); ?>
~~~

HTML Code
~~~
<input type="hidden" id="<?= $YourID ?>">

<img src="" id="<? $imgID ?>" class="thumbnail">
~~~

After clicking the snapshot the value attribute will be assigned to the given element based on ID.

Example image output : 

"data:image/png;base64,ASF9D8ASDF89ASDFHA8S9DFH98ADS...."

The following link may help to save the file to web server

https://gist.github.com/fazlurr/9802071
