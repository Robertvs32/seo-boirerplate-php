<!-- [
    ['icon' => '', 'url' => '', 'alt' => ''],
    ['icon' => '', 'url' => '', 'alt' => ''],
    ['icon' => '', 'url' => '', 'alt' => ''],
    ['icon' => '', 'url' => '', 'alt' => ''],
] -->

<?php
    function socialMediaBlog($arraySocialMedia){
        ob_start()?>
        <div class="social-media-blog">
            <?php 
                foreach($arraySocialMedia as $social): ?>
                    <a href="<?php echo $social['url']?>">
                        <img src="<?php echo $social['icon']?>" alt="<?php echo $social['alt']?>">
                    </a>
            <?php
                endforeach;
            ?>
        </div>
    <?php
        return ob_get_clean();
    }
?>