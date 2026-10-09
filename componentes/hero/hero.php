<!-- 
    [
        'imgFundoHero' => '', 
        'tituloHero' => '',
        'textoHero' => '',
        'linkBtnHero' => '',
        'txtBtnHero' => ''
        'btn' => boolean,
        'justify-content' => '' OPCIONAL - PADRÃO LEFT
    ] 
-->

<?php 
    function hero($arrayHero){
        ob_start(); ?>

        <section 
            class="hero-section" 
            style="background-image: url('<?php echo $arrayHero['imgFundoHero']; ?>');">
            <div class="hero-overlay"></div>
            
            <div 
                class="container hero-container"
                style="justify-content: <?php echo $arrayHero['justify-content']?>"
            >
                <div class="hero-content">
                    <h1 class="hero-title"><?php echo $arrayHero['tituloHero']; ?></h1>
                    <p class="hero-subtitle"><?php echo $arrayHero['textoHero']; ?></p>
                    <?php 
                        if($arrayHero['btn']):  ?>
                                <a href="<?php echo $arrayHero['linkBtnHero']; ?>" class="hero-btn"><?php echo $arrayHero['txtBtnHero'];?></a>
                        <?php endif;
                    ?>
                </div>
            </div>
        </section>

    <?php
        return ob_get_clean();
    };
?>