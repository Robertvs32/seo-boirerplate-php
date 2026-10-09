<?php 
    function subSubtitleBlog($subSubtitle){
        ob_start();?>

        <h3 class="subSubtitleBlog"><?php echo $subSubtitle?></h3>

    <?php
        return ob_get_clean();
    }?>
?>