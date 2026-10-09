<!-- 
 
    [
        ['url' => '', 'alt' => ''],
        ['url' => '', 'alt' => ''],
        ['url' => '', 'alt' => '']
    ]

-->

<?php 

    function gridFotos($fotos){
        ob_start()?>

        <section class="grid-fotos">
            <div class="grid-fotos-container">

                <div class="grid-fotos-grid">
                    <?php foreach ($fotos as $foto): ?>
                        <div class="grid-fotos-item">
                            <img 
                                src="<?php echo $foto['url']; ?>" 
                                alt="<?php echo $foto['alt']; ?>" 
                                loading="lazy"
                            >
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

    <?php 
        return ob_get_clean();
    }
?>