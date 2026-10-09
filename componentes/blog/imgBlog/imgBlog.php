[
    'url' => '',
    'alt' => '',
]

<?php 
    function imgBlog($arrayImgBlog){
        ob_start();?>

        <img 
            src="<?php echo $arrayImgBlog['url']?>" 
            alt="<?php echo $arrayImgBlog['alt']?>"
            class="imgBlog"
        >

    <?php
        return ob_get_clean();
    }?>
?>