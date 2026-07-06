<?php
$blocos = [
    [
        'titulo' => 'Ambiente Seguro e Discreto',
        'subtitulo' => 'Segurança Máxima',
        'texto' => 'Nossa loja física conta com monitoramento 24h e salas de avaliação privada. Entendemos que a venda de joias e ouro exige total sigilo e conforto para você realizar sua transação com tranquilidade.',
        'imagem' => './includes/features/images/ambiente.jpeg',
        'botao' => 'Conhecer Loja',
        'link' => '#'
    ],
    [
        'titulo' => 'Ambiente Seguro e Discreto',
        'subtitulo' => 'Segurança Máxima',
        'texto' => 'Nossa loja física conta com monitoramento 24h e salas de avaliação privada. Entendemos que a venda de joias e ouro exige total sigilo e conforto para você realizar sua transação com tranquilidade.',
        'imagem' => './includes/features/images/ambiente.jpeg',
        'botao' => 'Conhecer Loja',
        'link' => ''
    ],
];
?>

<link rel="stylesheet" href="./includes/features/features.module.css">

<?php foreach ($blocos as $index => $bloco): 
    // Lógica para inverter: se o índice for ímpar, ele inverte a ordem
    $inverter = ($index % 2 !== 0) ? 'row-reverse' : '';
?>
<section class="feature-section <?php echo $inverter; ?>">
    <div class="feature-grid">
        <div class="feature-content">
            <span class="feature-badge"><?php echo $bloco['subtitulo']; ?></span>
            <h2 class="feature-title"><?php echo $bloco['titulo']; ?></h2>
            <p class="feature-text"><?php echo $bloco['texto']; ?></p>
            <a href="<?php echo $bloco['link'] ?>" class="feature-btn"><?php echo $bloco['botao']; ?></a>
        </div>

        <div class="feature-img-box">
            <img src="<?php echo $bloco['imagem']; ?>" alt="<?php echo $bloco['titulo']; ?>" class="feature-img">
        </div>
    </div>
</section>
<?php endforeach; ?>