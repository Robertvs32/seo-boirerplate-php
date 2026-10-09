<?php
    function fecharSection(){
        ob_start()?>
        </section>
    <?php
        return ob_get_clean();
    }
?>