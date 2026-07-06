<?php
// Dados de localização do cliente
    $endereco = "R. Dom Pedro II, 185 - L.04 - Centro - Guarulhos";
    $telefone1 = "Alex - (11) 96968-2804";
    $telefone2 = "Adriano - (11) 94255-0065";
    $email = "contato@goldstar.com.br";
    $horario = "Seg à Sex: 09h às 18h | Sáb: 09h às 13h";
    $googleMapsLink = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.7476365894117!2d-46.527016724028506!3d-23.46956585822743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef5570a14e9c5%3A0x31e8dc49ef106947!2sR.%20Dom%20Pedro%20II%2C%20185%20-%20Centro%2C%20Guarulhos%20-%20SP%2C%2007110-140!5e0!3m2!1spt-BR!2sbr!4v1772376251625!5m2!1spt-BR!2sbr"; 
    $numero = '5511969682804';
    $texto = rawurlencode("Olá, vim através do site e gostaria de mais informações.");
?>

<link rel="stylesheet" href="./includes/localizacao/localizacao.css">

<section class="loc-section" id="contatos">
    <div class="container loc-grid">
        <div class="loc-info">
            <span class="loc-tag">Onde Estamos</span>
            <h2 class="loc-title">Visite nossa loja física</h2>
            <p class="loc-desc">Para sua segurança, realizamos avaliações presenciais com toda a discrição e tecnologia necessária.</p>

            <div class="loc-details">
                <div class="loc-item">
                    <span class="icon">📍</span>
                    <div>
                        <strong>Endereço</strong>
                        <p><?php echo $endereco; ?></p>
                    </div>
                </div>
                <div class="loc-item">
                    <span class="icon">📞</span>
                    <div>
                        <strong>Telefone / WhatsApp</strong>
                        <p><?php echo $telefone1; ?></p>
                        <p><?php echo $telefone2; ?></p>
                    </div>
                </div>
                <div class="loc-item">
                    <span class="icon">⏰</span>
                    <div>
                        <strong>Horário de Atendimento</strong>
                        <p><?php echo $horario; ?></p>
                    </div>
                </div>
            </div>

            <a href="https://wa.me/<?php echo $numero; ?>?text=<?php echo $texto;?>" class="btn-rota">Entre em contato! →</a>
        </div>

        <div class="loc-map">
            <iframe 
                src="<?php echo $googleMapsLink; ?>" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>