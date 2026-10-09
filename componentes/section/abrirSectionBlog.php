<?php
    function abrirSectionBlog($id){
        ob_start()?>
        
        <section class="sectionBlog" id="<?php echo $id?>">
    <?php
        return ob_get_clean();
    }
?>