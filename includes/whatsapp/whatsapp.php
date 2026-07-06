<?php 
    $numero = '5511945845448';
    $texto = rawurlencode("Olá, vim através do site e gostaria de mais informações.");
    $instagram = "silvio"
?>

<link rel="stylesheet" href="./includes/whatsapp/whatsapp.module.css">

<a
    href="https://wa.me/<?php echo $numero; ?>?text=<?php echo $texto;?>"
    class="btn-whatsapp-flutuante" 
    target="_blank" 
    rel="noopener noreferrer" 
    title="Falar no WhatsApp">
   
   <img style="width: 80px; z-index: 10" src="includes/whatsapp/icons/whatsapplogo.webp" alt="logo whatsapp">
</a>

<a
    href="https://instagram.com/<?php echo $instagram;?>"
    class="btn-instagram-flutuante" 
    target="_blank" 
    rel="noopener noreferrer" 
    title="Instagram">
   
   <img style="width: 40px; z-index: 10" src="includes/whatsapp/icons/instagram.png" alt="logo whatsapp">
</a>