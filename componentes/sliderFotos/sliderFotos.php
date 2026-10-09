<!-- 
    [
        ['img' => '', 'alt' => '']
    ] 
-->

<?php 
    function sliderFotos($fotos){
        ob_start();?>

        <div class="sliderFotos swiper">
            <div class="swiper-wrapper sliderFotosWrapper">
                <?php foreach($fotos as $item):?>
                    <div class="swiper-slide sliderFotosSlide">
                        <img 
                            class="sliderFotosImg"
                            src="<?php echo $item['img']?>"
                            alt="<?php echo $item['alt']?>"
                        >
                    </div>
                <?php endforeach;?>
            </div>
        </div>

    <script>
        new Swiper('.sliderFotos', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1.5,
            centeredSlides: true,
            spaceBetween: 16,
            grabCursor: true
        })
    </script>

    <?php
        return ob_get_clean();
    }
?>