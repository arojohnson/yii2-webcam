<?php
/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 * View File - for creating web cam capture
 */
$windowHtml = '<div class="parentRow">
    <div class="jayDiv">
        <video id="' . $videoID . '" width="' . $width . '" height="' . $height . '" autoplay></video>
    </div><br />
    <div class=" jayDiv">
        <canvas id="' . $canvasID . '" width="' . $width . '" height="' . $height . '"></canvas>
    </div>
</div>
<br />
<div class="parentRow">
    <div class="centered">
        <button id="' . $buttonID . '" class="btn btn-success">Snap Photo!</button>&nbsp; &nbsp; <button id="' . $buttonID . '_close' . '" class="btn btn-success">Done</button>
    </div>
</div>
';
?>
<button type="button" class="btn btn-primary" id="<?= $id ?>" >Snap Photo</button>
<script type="text/javascript">
    jayWebCamApp({canvasID: '<?= $canvasID ?>', videoID: '<?= $videoID ?>', buttonID: '<?= $buttonID ?>', width: '<?= $width ?>', height: '<?= $height ?>', eleID: '<?= $eleID ?>', windowHtml: '<?= base64_encode($windowHtml) ?>', id: '<?= $id ?>', imgID: '<?= $imgID ?>'});
</script>