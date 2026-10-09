<!-- 
 
[
    'nomeEmpresa' => "",
    'textFooter' => "",
    'telefones' => [
        'Alex - (11) 94332-1122',
        'Adriano - (11) 94432-2233'
    ],
    'email' => '',
    'endereco' => '',
    'cnpj' => '',
    'navLinks' => [
        ['nome' => '', 'url' => ''],
        ['nome' => '', 'url' => ''],
        ['nome' => '', 'url' => '']
    ]
]

-->

<?php
    function footer($arrayFooter){
        ob_start();?>

        <footer class="footer">
            <div class="container footer-grid">
                <div class="footer-box">
                    <h3 class="footer-logo"><?php echo $arrayFooter['nomeEmpresa']; ?></h3>
                    <p class="footer-text"><?php echo $arrayFooter['textFooter'];?></p>
                </div>

                <div class="footer-box">
                    <h4 class="footer-title">Navegação</h4>
                    <ul class="footer-links">
                        <?php foreach($arrayFooter['navLinks'] as $link):?>
                            <li>
                                <a href="<?php  echo $link['url'];?>"><?php echo $link['nome']?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>

                <div class="footer-box">
                    <h4 class="footer-title">Contatos</h4>
                    <p class="footer-contact">📍 <?php echo $arrayFooter['endereco'];?></p>
                    <p class="footer-contact">📞 <?php echo $arrayFooter['telefones'][0];?></p>
                    <p class="footer-contact">📞 <?php echo $arrayFooter['telefones'][0];?></p>
                    <p class="footer-contact">✉️ <?php echo $arrayFooter['email'];?></p>
                </div>

            </div>

            <div class="footer-bottom">
                <div class="container bottom-content">
                    <p><?php echo date('Y');?> - <?php echo $arrayFooter['nomeEmpresa'];?> - CNPJ: <?php echo $arrayFooter['cnpj']; ?>. Todos os direitos reservados.</p>
                    <!-- <p>Desenvolvido por Agência Robbes<a href="https://robbe.com.br" target="_blank"><strong>.</strong></a></p> -->
                </div>
            </div>
        </footer>

    <?php 
        return ob_get_clean();
        }
?>
    

