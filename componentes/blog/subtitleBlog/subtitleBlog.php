<?php 
    function subtitleBlog($subtitle){
        ob_start();?>

        <h2 class="subtitleBlog"><?php echo $subtitle?></h2>

    <?php
        return ob_get_clean();
    }?>
?>