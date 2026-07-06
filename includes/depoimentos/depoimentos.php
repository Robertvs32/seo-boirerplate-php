<?php
$depoimentos = [
    ['nome' => 'Ana Paula', 'cargo' => '', 'texto' => 'A experiência foi impecável. Profissionalismo raro.', 'foto' => 'https://i.pravatar.cc/100?u=1', 'estrelas' => 5],
    ['nome' => 'Ricardo Santos', 'cargo' => '', 'texto' => 'Segurança e agilidade definem o processo.', 'foto' => 'https://i.pravatar.cc/100?u=2', 'estrelas' => 5],
    ['nome' => 'Cláudia Lima', 'cargo' => '', 'texto' => 'Design limpo e direto. Exatamente o que eu buscava.', 'foto' => 'https://i.pravatar.cc/100?u=3', 'estrelas' => 5],
    ['nome' => 'Pedro Rocha', 'cargo' => '', 'texto' => 'Atendimento VIP e entrega rápida.', 'foto' => 'https://i.pravatar.cc/100?u=4', 'estrelas' => 5]
];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="./includes/depoimentos/depoimentos.module.css">

<section class="testimonial-section" id="depoimentos">
    <div class="containerDepoimentos">
        
        <div class="section-header">
            <h2>Nossos clientes</h2>
            <p>Depoimentos</p>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php foreach ($depoimentos as $d): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div>
                                <div class="stars"><?php echo str_repeat('★', $d['estrelas']); ?></div>
                                <p class="testimonial-text">"<?php echo $d['texto']; ?>"</p>
                            </div>
                            <div class="user-meta">
                                <img src="<?php echo $d['foto']; ?>" alt="">
                                <div>
                                    <h4><?php echo $d['nome']; ?></h4>
                                    <span><?php echo $d['cargo']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    grabCursor: true,
    navigation: { 
        nextEl: ".swiper-button-next", 
        prevEl: ".swiper-button-prev" 
    },
    breakpoints: {
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
    autoplay: { delay: 5000 },
  });
</script>