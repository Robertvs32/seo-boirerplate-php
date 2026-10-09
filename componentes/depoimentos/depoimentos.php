<!-- 
    [
        [
            'estrelas' => '',
            'texto' => '',
            'foto' => '',
            'alt' => '',
            'nome' => '',
        ]
    ] 
-->

<?php 

    function depoimentos($depoimentos){
        ob_start();?>

        <div class="containerDepoimentos">
            <div class="testimonial-section">
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
            </div>


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
        <?php
        return ob_get_clean();
    };
?>