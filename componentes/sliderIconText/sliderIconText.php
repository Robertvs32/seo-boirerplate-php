<!-- 
    [
        [
            'icone' => '',
            'alt' => '',
            'titulo' => '',
            'desc' => ''
        ]
    ]
-->

<?php 
    function sliderIconText($sliderIconText){
        ob_start()?>
        <div class="sliderIconText-container">
            <div class="swiper mySwiperSliderIconText">
                <div class="swiper-wrapper sliderIconText-wrapper">
                    <?php foreach ($sliderIconText as $s): ?>
                        <div class="swiper-slide sliderIconText-slide">
                            <div class="sliderIconText-card-slider">
                                <img 
                                    class="icon"
                                    src="<?php echo $s['icone']; ?>"
                                    alt="<?php echo $s['alt']; ?>"
                                >
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

        <script>
        var swiper = new Swiper(".mySwiperSliderIconText", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
            breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
            },
            autoplay: { delay: 3000 },
        });
        </script>

    <?php
        return ob_get_clean();
    }
?>