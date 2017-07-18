<?php
/**
 * @author Arockia Johnson SR<johnson@arojohnson.tk>
 * View File - for creating web cam capture
 */
?>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <video id="<?= $videoID ?>" width="640" height="480" autoplay></video>
    </div>
    <div class="col-md-6 col-sm-12">
        <canvas id="<?= $canvasID ?>" width="640" height="480"></canvas>
    </div>
</div>
<div class="row">
    <button id="<?= $buttonID ?>" class="btn btn-success">Snap Jay Photo!</button>
</div>
<script type="text/javascript">
    var jayWebCam = {canvasID: '<?= $canvasID ?>', videoID: '<?= $videoID ?>', buttonID: '<?= $buttonID ?>'};
</script>