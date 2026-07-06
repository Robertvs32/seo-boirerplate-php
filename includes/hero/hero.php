<?php
    $tituloPrincipal = "Nós resolvemos a burocracia. Você planeja a mudança!";
    $subtexto = "Confira as melhores opções de imóveis em Guarulhos e regiao, na SFG consultoria";
    $imagemFundo = "./includes/hero/images/fundo.png    "; 
    $linkBotao = "#contato";
?>

<link rel="stylesheet" href="./includes/hero/hero.module.css">

<section class="hero-section" style="background-image: url('<?php echo $imagemFundo; ?>');">
    <div class="hero-overlay"></div>
    
    <div class="container hero-container">
        <div class="hero-content">
            <h1 class="hero-title"><?php echo $tituloPrincipal; ?></h1>
            <p class="hero-subtitle"><?php echo $subtexto; ?></p>
            <a href="<?php echo $linkBotao; ?>" class="hero-btn">Saiba Mais</a>
        </div>
    </div>
</section>