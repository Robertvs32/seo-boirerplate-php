<?php
$anoAtual = date('Y');
$nomeEmpresa = "Ruby Gold";
$cnpj = "00.000.000/0001-00"; // Importante para credibilidade
?>

<link rel="stylesheet" href="./includes/footer/footer.css">

<footer class="footer">
    <div class="container footer-grid">
        <div class="footer-box">
            <h3 class="footer-logo"><?php echo $nomeEmpresa; ?></h3>
            <p class="footer-text">Especialistas em avaliação e compra de metais preciosos com transparência, segurança e a melhor cotação do mercado.</p>
        </div>

        <div class="footer-box">
            <h4 class="footer-title">Contato</h4>
            <p class="footer-contact">📍 R. Dom Pedro II, 185 - L.04 - Centro - Guarulhos</p>
            <p class="footer-contact">📞 (11) 96968-2804 - Alex</p>
            <p class="footer-contact">📞 (11) 94255-0065 - Adriano</p>
            <p class="footer-contact">✉️ contato@rubygold.com</p>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="container bottom-content">
            <p>&copy; <?php echo $anoAtual; ?> <?php echo $nomeEmpresa; ?>. Todos os direitos reservados.</p>
            <!-- <p>Desenvolvido por <a href="https://robbe.com.br" target="_blank"><strong>.</strong></a></p> -->
        </div>
    </div>
</footer>