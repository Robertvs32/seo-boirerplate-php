<!-- 
    [
        'tempo' => '',
        'autor' => '',
        'data' => ''
    ] 
-->

<?php 
    function infosBlog($arrayInfosBlog){
        ob_start();?>

        <div class="infosBlog">
            <p class="infoBlog">Tempo de leitura: <?php echo $arrayInfosBlog['tempo']?></p>
            <p class="infoBlog">Autor: <?php echo $arrayInfosBlog['autor']?></p>
            <p class="infoBlog">Data: <?php echo $arrayInfosBlog['data']?></p>
        </div>

    <?php
        return ob_get_clean();
    }?>
?>