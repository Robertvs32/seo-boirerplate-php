<!-- 
    [
        [
            'id' => '',
            'icone' => '',
            'alt' => '',
            'titulo' => '',
            'desc' => '',
        ]
    ]
-->

<?php 
    function gridIconText($gridIconText){
        ob_start();?>

        <div class="gridIconText">
            <?php foreach ($gridIconText as $item): ?>
                <div class="gridIconText-item">
                    <?php if($item['id']):?>
                        <span class="gridIconText-number"><?php echo $item['id']; ?></span>
                    <?php endif?>
                    <div class="gridIconText-content">
                        <img 
                            class="gridIconText-icon" 
                            src="<?php echo $item['icone']; ?>"
                            alt="<?php echo $item['alt']?>"
                        >
                        </img>
                        <h3 class="gridIconText-title"><?php echo $item['titulo']; ?></h3>
                        <p class="gridIconText-desc"><?php echo $item['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php
        return ob_get_clean();
    }
?>

