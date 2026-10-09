<?php 
    function textBlog($text){
        ob_start();?>

        <p class="textBlog">
            <?php echo $text?>
        </p>

    <?php
        return ob_get_clean();
    }?>
?>