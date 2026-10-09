<?php 
    function ctaFull(){
        ob_start();?>

        <div class="ctaFull">
            <span>Não troque o certo pelo duvidoso. Escolha <strong>LegiClima!</strong></span>

            <button>Entre em contato agora!</button>
        </div>

    <?php 
        return ob_get_clean();
    }
?>