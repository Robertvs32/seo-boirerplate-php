<!-- 

    [
        'logo' => './logo.svg',
        'altLogo' => 'aaa',
        'navLinks' => [
            ['url' => 'https://github.com/', 'nome' => 'github'],
            ['url' => 'https://github.com/', 'nome' => 'aaaa'],
        ]
    ]

-->

<?php 

    function headerNav($arrayHeaderNavbar){
        ob_start();?>

        <header class="headerScroll" id="headerScroll">
                <a href="/" class="logoHeaderScroll" aria-label="Voltar ao início">
                    <img 
                        src="<?php echo $arrayHeaderNavbar['logo']?>" 
                        alt="<?php echo $arrayHeaderNavbar['altLogo']?>">
                </a>

                <nav class="navHeaderScroll" id="navHeaderScroll">
                    <ul class="navListHeaderScroll">
                        <?php foreach($arrayHeaderNavbar['navLinks'] as $link): ?>
                            <li><a class="linkNavListHeaderScroll" href="<?php echo $link['url']; ?>"><?php echo $link['nome']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

                <button 
                    type="button"
                    aria-label="Abrir menu de navegação"
                    aria-expanded="false"
                    aria-controls="navHeaderScroll"
                    class="hamburguerHeaderScroll" 
                    id="hamburguerHeaderScroll"
                >
                    <span class="barHeaderScroll"></span>
                    <span class="barHeaderScroll"></span>
                    <span class="barHeaderScroll"></span>
                </button>
            </header>
    
    <?php 
        return ob_get_clean();
    }   
?>






