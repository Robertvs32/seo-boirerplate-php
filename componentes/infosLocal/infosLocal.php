<!-- 
    [
        'title' => '',
        'desc' => '',
        'endereco' => '',
        'telefones' => [
            ['nome' => '', 'telefone' => '']
        ],
        'horario' => 'Seg à Sex: 09h às 18h | Sáb: 09h às 15h | Dom: 09h às 12:00',
        'descBtn' => '',
        'googleMapsLink' => '',
    ]
-->

<?php 
    function infosLocal($arrayInfosLocal){
        ob_start();?>

        <section class="loc-section" id="contato">
            <div class="container loc-grid">
                <div class="loc-info">
                    <h2 class="loc-title"><?php echo $arrayInfosLocal['title']?></h2>
                    <p class="loc-desc"><?php echo $arrayInfosLocal['desc']?></p>

                    <div class="loc-details">
                        <div class="loc-item">
                            <span class="icon">📍</span>
                            <div id="endereco">
                                <strong>Endereço</strong>
                                <p><?php echo $arrayInfosLocal['endereco']; ?></p>
                            </div>
                        </div>
                        <div class="loc-item">
                            <span class="icon">📞</span>
                            <div>
                                <strong>Telefone / WhatsApp</strong>

                                <?php foreach($arrayInfosLocal['telefones'] as $item):?>
                                    <p><?php echo $item['nome'] . ' - ' . $item['telefone']; ?></p>
                                <?php endforeach?>
                            </div>
                        </div>
                        <div class="loc-item">
                            <span class="icon">⏰</span>
                            <div>
                                <strong>Horário de Atendimento</strong>
                                <p><?php echo $arrayInfosLocal['horario']; ?></p>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/<?php echo $arrayInfosLocal['whatsapp']; ?>?text=<?php echo $texto;?>" class="btn-rota"><?php echo $arrayInfosLocal['descBtn']?></a>
                </div>

                <div class="loc-map">
                    <iframe 
                        src="<?php echo $arrayInfosLocal['googleMapsLink']; ?>" 
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

    <?php
        return ob_get_clean();
    }
?>