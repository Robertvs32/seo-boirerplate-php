<?php
    function abrirSection($id){
        ob_start()?>
        
        <section class="section" id="<?php echo $id?>">
    <?php
        return ob_get_clean();
    }
?>