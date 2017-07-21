<?php
/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 * View File - for creating web cam capture
 */
?>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <video id="<?= $videoID ?>" width="<?= $width ?>" height="<?= $height ?>" autoplay></video>
    </div>
    <div class="col-md-6 col-sm-12">
        <canvas id="<?= $canvasID ?>" width="<?= $width ?>" height="<?= $height ?>"></canvas>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-12 col-md-offset-3">
        <button id="<?= $buttonID ?>" class="btn btn-success">Snap Jay Photo!</button>
    </div>
</div>
<script type="text/javascript">
    jayWebCamApp({canvasID: '<?= $canvasID ?>', videoID: '<?= $videoID ?>', buttonID: '<?= $buttonID ?>', width: '<?= $width ?>', height: '<?= $height ?>', eleID: '<?= $eleID ?>'});
</script>