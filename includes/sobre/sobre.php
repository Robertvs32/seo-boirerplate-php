<?php
// Dados do cliente
$sobreTitulo = "Mais de 15 anos atendendo o mercado imobiliario!";

$sobreTexto = "Tradição e Segurança no Mercado Imobiliário. Com mais de 15 anos de experiência, oferecemos consultoria especializada em todos os tipos de imóveis, residenciais e comerciais. Atendimento exclusivo e suporte completo para garantir uma transação segura e sem burocracia. Fale com quem entende e realize seu melhor negócio";

$sobreImagem = "./includes/sobre/images/silvio.jpeg";

// Array de estatísticas (Dinamismo!)
$stats = [
    ['valor' => '500+', 'label' => 'Contratos assinados'],
    ['valor' => '100%', 'label' => 'Satisfação'],
    ['valor' => '24/7', 'label' => 'Suporte'],
];
?>

<link rel="stylesheet" href="./includes/sobre/sobre.module.css">

<section class="sobre-section" id="sobre">
    <div class="container sobre-grid">
        <div class="sobre-img-container">
            <img src="<?php echo $sobreImagem; ?>" alt="Nossa Equipe" class="sobre-img">
            <div class="img-badge">
                <span>+ 15 Anos de Experiência</span>
            </div>
        </div>

        <div class="sobre-content">
            <span class="sobre-tag">Silvio Guimaraes</span>
            <h2 class="sobre-title"><?php echo $sobreTitulo; ?></h2>
            <p class="sobre-description"><?php echo $sobreTexto; ?></p>

            <div class="sobre-stats">
                <?php foreach($stats as $item): ?>
                    <div class="stat-item">
                        <h3 class="stat-value"><?php echo $item['valor']; ?></h3>
                        <p class="stat-label"><?php echo $item['label']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <a href="#contato" class="sobre-link">Saiba mais sobre nossa história →</a>
        </div>
    </div>
</section>