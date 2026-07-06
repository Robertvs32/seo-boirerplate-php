<?php
    $empresaNome = "SFG Consultoria";
    $navLinks = [
        ['nome' => 'Início', 'url' => 'index.php'],
        ['nome' => 'Serviços', 'url' => '#servicos'],
        ['nome' => 'Portfólio', 'url' => '#portfolio'],
        ['nome' => 'Contato', 'url' => '#contato'],
    ];
?>

<nav class="navbar" id="navbar">
    <div class="container">
        <a href="#" class="logo"><?php echo $empresaNome; ?></a>

        <ul class="nav-menu">
            <?php foreach($navLinks as $link): ?>
                <li><a class="btnLink" href="<?php echo $link['url']; ?>"><?php echo $link['nome']; ?></a></li>
            <?php endforeach; ?>
        </ul>

        <div class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>

<script src="./includes/navbar/navbar.js"></script>
<link rel="stylesheet" href="./includes/navbar/navbar.module.css">