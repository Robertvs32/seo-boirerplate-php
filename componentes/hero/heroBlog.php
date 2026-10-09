<!-- 
    [
        'imgFundoHeroBlog' => '', 
        'tituloHeroBlog' => '',
        'subtextBlog' => '',
        'justify-content' => '' OPCIONAL - PADRÃO LEFT
    ] 

    [
        ['nome' => '', 'url' => ''],
        ['nome' => '', 'url' => ''],
        ['nome' => '', 'url' => ''],
    ]
-->

<?php 
    function heroBlog($arrayHero, $arrayBreadcrumb){
        ob_start(); ?>

        <section 
            class="hero-section" 
            style="background-image: url('<?php echo $arrayHero['imgFundoHeroBlog']; ?>');"
        >
            <div class="hero-overlay"></div>
            
            <div 
                class="container hero-container"
                style="justify-content: <?php echo $arrayHero['justify-content']?>"
            >
                <div class="hero-content">
                    <section class="breadcrumb" id="breadcrumb">
                        <a class="linkBreadcrumb" href="<?php echo $arrayBreadcrumb[0]['url']?>"><?php echo $arrayBreadcrumb[0]['nome']?></a>
                        <p class="separadorBreadcrumb">></p>
                        <a class="linkBreadcrumb" href="<?php echo $arrayBreadcrumb[1]['url']?>"><?php echo $arrayBreadcrumb[1]['nome']?></a>
                        <p class="separadorBreadcrumb">></p>
                        <a class="linkBreadcrumb" href="<?php echo $arrayBreadcrumb[2]['url']?>"><?php echo $arrayBreadcrumb[2]['nome']?></a>
                    </section>
                    
                    <h1 class="hero-title"><?php echo $arrayHero['tituloHeroBlog']; ?></h1>
                    <p class="hero-subtitle"><?php echo $arrayHero['subtextBlog']; ?></p>
                </div>
            </div>
        </section>

    <?php
        return ob_get_clean();
    };
?>