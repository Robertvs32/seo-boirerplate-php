<!-- [
    'title' => '',
    'desc' => ''
] -->

<?php 
    function simpleTitleSection($simpleTitleSection){
        ob_start();?>

        <div class="simpleTitleSection">
            <h2 class="simpleTitleSection-title"><?php echo $simpleTitleSection['title']?></h2>
            <p class="simpleTitleSection-desc"><?php echo $simpleTitleSection['desc']?></p>
        </div>

    <?php
        return ob_get_clean();
    }
?>

