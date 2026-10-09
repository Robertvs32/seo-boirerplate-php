<!-- [
    'title' => '',
    'desc' => ''
] -->

<?php 
    function titleSection($titleSection){
        ob_start();?>

        <div class="titleSection">
            <h2 class="titleSection-title"><?php echo $titleSection['title']?></h2>
            <p class="titleSection-desc"><?php echo $titleSection['desc']?></p>
        </div>

    <?php
        return ob_get_clean();
    }
?>

