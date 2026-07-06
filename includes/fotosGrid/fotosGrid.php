<?php
// Configurações da Galeria de Fotos
    $galeria_titulo = "Nosso espaço";
    $galeria_subtitulo = "Conheça";
    $galeria_desc = "Veja fotos do nosso ambiente preparado para garantir o seu conforto e total discrição.";

    // Array com o caminho das fotos (basta alterar ou adicionar mais caminhos aqui)
    $fotos = [
        "./includes/fotosGrid/fotos/foto1.jpeg",
        "./includes/fotosGrid/fotos/foto2.jpeg",
        "./includes/fotosGrid/fotos/foto3.jpeg",
        "./includes/fotosGrid/fotos/foto5.jpeg",
        "./includes/fotosGrid/fotos/foto6.jpeg",
        "./includes/fotosGrid/fotos/foto7.jpeg"
    ];
?>

<link rel="stylesheet" href="./includes//fotosGrid/fotosGrid.module.css">

<section class="galeria-section" id="local">
    <div class="galeria-container">
        
        <div class="galeria-header">
            <span class="galeria-tag"><?php echo $galeria_subtitulo; ?></span>
            <h2 class="galeria-title"><?php echo $galeria_titulo; ?></h2>
            <p class="galeria-desc"><?php echo $galeria_desc; ?></p>
        </div>

        <div class="galeria-grid">
            <?php foreach ($fotos as $index => $foto): ?>
                <div class="galeria-item">
                    <img 
                        src="<?php echo $foto; ?>" 
                        alt="Foto <?php echo $index + 1; ?> - Gold Star" 
                        loading="lazy"
                    >
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>