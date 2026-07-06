<?php
$passos = [
    [
        'id' => '01',
        'icone' => './includes/processos/icons/floco-de-neve.png',
        'titulo' => 'Avaliação Técnica',
        'desc' => 'Analisamos suas peças na hora com equipamentos de precisão para identificar o teor do ouro.'
    ],
    [
        'id' => '02',
        'icone' => './includes/processos/icons/floco-de-neve.png',
        'titulo' => 'Pesagem e Cotação',
        'desc' => 'Pesamos seu ouro em balanças certificadas e aplicamos a melhor cotação do mercado no dia.'
    ],
    [
        'id' => '03',
        'icone' => './includes/processos/icons/floco-de-neve.png',
        'titulo' => 'Proposta Justa',
        'desc' => 'Apresentamos o valor final com total transparência, sem taxas escondidas ou letras miúdas.'
    ],
    [
        'id' => '04',
        'icone' => './includes/processos/icons/floco-de-neve.png',
        'titulo' => 'Pagamento',
        'desc' => 'Com tudo aprovado, o dinheiro cai na sua conta de forma imediata e segura antes de você sair.'
    ]
];
?>

<link rel="stylesheet" href="./includes/processos/processos.module.css">

<section class="process-section">
    <div class="container-process">
        <div class="section-header" style="text-align: center;">
            <h2 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: #999;">Processo Simples</h2>
            <p style="font-size: 1.8rem; color: #111; font-weight: 300;">Como vender seu ouro em 4 passos</p>
        </div>

        <div class="process-grid">
            <?php foreach ($passos as $p): ?>
                <div class="process-item">
                    <span class="process-number"><?php echo $p['id']; ?></span>
                    <div class="process-content">
                        <img src="<?php echo $p['icone']?>" class="process-icon"/>
                        <h3><?php echo $p['titulo']; ?></h3>
                        <p><?php echo $p['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>