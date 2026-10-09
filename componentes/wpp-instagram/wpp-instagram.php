<!-- 
[
    'numero' => '',
    'texto' => '',
    'instagram'
]
-->

<?php 
    function wppInstagram($dados){
        ob_start()?>

        <a
            href="https://wa.me/<?php echo $dados['numero']; ?>?text=<?php echo $dados['texto'];?>"
            class="btn-whatsapp-flutuante" 
            target="_blank" 
            rel="noopener noreferrer" 
            title="Falar no WhatsApp">
        
        <img style="width: 80px; z-index: 10" src="includes/whatsapp/icons/whatsapplogo.webp" alt="Logo whatsapp">
        </a>

        <a
            href="https://instagram.com/<?php echo $dados['instagram'];?>"
            class="btn-instagram-flutuante" 
            target="_blank" 
            rel="noopener noreferrer" 
            title="Instagram">
        
        <img style="width: 40px; z-index: 10" src="includes/whatsapp/icons/instagram.png" alt="Logo instagramp">
        </a>

    <?php
        return ob_get_clean();
    }
?>