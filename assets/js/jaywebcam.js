var jayWebCamApp = function (jayWebCam, uniqID) {
    var jay = {};
    if (typeof jayWebCam === 'undefined') {
        var jayWebCam = {canvasID: '', videoID: '', buttonID: '', width: '', height: '', eleID: '', windowHtml: '', id: '', imgID: ''};
    }
    jay.uniqID = uniqID;
    jay.init = function () {
        var title = "Webcam - Capture photo from integrated WebCam";
        var camWindow = window.open('', 'PRINT', 'height=500,width=1000,location=yes');
        camWindow.document.write('<html><head><title>' + title + '</title><style>@media print{@page{size: landscape;margin:0}@media print{body,html{width:1000px;height:777px;}} </style>');
        camWindow.document.write('</head><body style="padding:15px"><div style="border:1px solid #999; margin: 0;">');
        camWindow.document.write('<h1 style="font-family:arial; font-size:28px; font-weight:bold; border: 2px solid #9FBE3B; border-left: 0px solid #999;border-right: 0px solid #999;margin: 0; padding:10px;">' + title + '</h1>');
        camWindow.document.write('<div class="centered" style="padding:10px; overflow:hidden; width:96%">' + window.atob(jayWebCam.windowHtml) + '</div>');
        camWindow.document.write('</div><style>.jayDiv{ border: 1px dashed #ddd; box-shadow: 0 0 0 3px #fff, 0 0 0 5px #ddd, 0 0 0 10px #fff, 0 0 2px 10px #eee;} .centered{text-align: center; }</style></body></html>');
        camWindow.document.close();
        camWindow.focus();
        // Grab elements, create settings, etc.
        var canvas = camWindow.document.getElementById(jayWebCam.canvasID);
        var context = canvas.getContext('2d');
        var video = camWindow.document.getElementById(jayWebCam.videoID);
        var mediaConfig = {video: true};
        var errBack = function (e) {
            console.log('An error has occurred!', e);
        };

        // Put video listeners into place
        if (camWindow.navigator.mediaDevices && camWindow.navigator.mediaDevices.getUserMedia) {
            camWindow.navigator.mediaDevices.getUserMedia(mediaConfig).then(function (stream) {
                video.src = camWindow.URL.createObjectURL(stream);
                video.play();
            });
        }

        /* Legacy code below! */
        else if (camWindow.navigator.getUserMedia) { // Standard
            camWindow.navigator.getUserMedia(mediaConfig, function (stream) {
                video.src = stream;
                video.play();
            }, errBack);
        } else if (camWindow.navigator.webkitGetUserMedia) { // WebKit-prefixed
            camWindow.navigator.webkitGetUserMedia(mediaConfig, function (stream) {
                video.src = camWindow.webkitURL.createObjectURL(stream);
                video.play();
            }, errBack);
        } else if (camWindow.navigator.mozGetUserMedia) { // Mozilla-prefixed
            camWindow.navigator.mozGetUserMedia(mediaConfig, function (stream) {
                video.src = camWindow.URL.createObjectURL(stream);
                video.play();
            }, errBack);
        }

        // Trigger photo take
        camWindow.document.getElementById(jayWebCam.buttonID).addEventListener('click', function () {
            context.drawImage(video, 0, 0, jayWebCam.width, jayWebCam.height);
            if (window.parent.document.getElementById(jayWebCam.eleID)) {
                window.parent.document.getElementById(jayWebCam.eleID).value = canvas.toDataURL('image/png');
            }
            if (window.parent.document.getElementById(jayWebCam.imgID)) {
                window.parent.document.getElementById(jayWebCam.imgID).src = canvas.toDataURL('image/png');
            }
//        window.open(canvas.toDataURL('image/png'));
        });

        camWindow.document.getElementById(jayWebCam.buttonID + '_close').addEventListener('click', function () {
            camWindow.close();
        });

    };
    document.getElementById(jayWebCam.id).addEventListener('click', function () {
        jay.init();
    });
    return jay;
};