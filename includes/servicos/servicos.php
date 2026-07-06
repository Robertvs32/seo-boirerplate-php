<?php
$servicos = [
    [
        'titulo' => 'Pagamento PIX', 
        'desc' => 'Dinheiro na conta de forma imediata e segura.', 
        'icone' => './includes/servicos/icons/floco-de-neve.png'
    ],
    [
        'titulo' => 'Pagamento PIX', 
        'desc' => 'Dinheiro na conta de forma imediata e segura.', 
        'icone' => './includes/servicos/icons/floco-de-neve.png'
    ],
    [
        'titulo' => 'Pagamento PIX', 
        'desc' => 'Dinheiro na conta de forma imediata e segura.', 
        'icone' => './includes/servicos/icons/floco-de-neve.png'
    ],
    [
        'titulo' => 'Pagamento PIX', 
        'desc' => 'Dinheiro na conta de forma imediata e segura.', 
        'icone' => './includes/servicos/icons/floco-de-neve.png'
    ],
];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="./includes/servicos/servicos.module.css">

<section class="slider-section" id="servicos">
    <div class="containerServicos">

        <div class="section-header-servicos">
            <h2>Servicos</h2>
            <p>Nossos servicos</p>
        </div>

        <div class="swiper mySwiperServicos">
            <div class="swiper-wrapper">
                <?php foreach ($servicos as $s): ?>
                    <div class="swiper-slide">
                        <div class="service-card-slider">
                            <img src="<?php echo $s['icone']; ?>" class="icon"/>
                            <h3><?php echo $s['titulo']; ?></h3>
                            <p><?php echo $s['desc']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiperServicos", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: { el: ".swiper-pagination", clickable: true },
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
    breakpoints: {
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
    autoplay: { delay: 3000 },
  });
</script>