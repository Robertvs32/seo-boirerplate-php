<!-- 
 
[
    'titulo' => '',
    'subtitulo' => '',
    'texto' => '',
    'imagem' => '',
    'txtBotao' => '',
    'inverter' => '',
    'btn' => ''
]

-->

<?php 
    function feature($arrayFeature){
        ob_start()?>

        <section class="feature-section <?php echo $arrayFeature['inverter'] ? 'row-reverse' : ''; ?>">
            <div class="container feature-grid">
                <div class="feature-content">
                    <h2 class="feature-title"><?php echo $arrayFeature['titulo']; ?></h2>
                    <p class="feature-text"><?php echo $arrayFeature['texto']; ?></p>

                    <?php if($arrayFeature['btn']):?>
                        <a href="#contato" class="feature-btn"><?php echo $arrayFeature['txtBotao']; ?></a>
                    <?php endif?>
                    
                </div>

                <div class="feature-img-box">
                    <img src="<?php echo $arrayFeature['imagem']; ?>" alt="<?php echo $arrayFeature['titulo']; ?>" class="feature-img">
                </div>
            </div>
        </section>

        <?php 
            return ob_get_clean();
        }
?>
