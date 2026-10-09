
<?php 
    function mapaInteiro($src){
        ob_start();?>

        <div class="mapaInteiroContainer">
            <iframe 
                src="<?php echo $src?>" 
                width="100%" 
                height="500" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
            >
            </iframe>
        </div>

    <?php 
        return ob_get_clean();
    }
?>
