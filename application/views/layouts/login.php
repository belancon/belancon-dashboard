<?php
if(isset($parts['public_header'])) {
    echo $parts['public_header'];
}

?>

<div class="wrapper">
    <div class="main-panel" style="width:100%">
        <div class="content">
            <?php 
                if(isset($content)) {
                    echo $content;
                }
            ?>
        </div>
    </div>
</div>


</body>

    <?php
        // Custom JS Files
        if(isset($theme['assets']['footer']['js'])) {
            foreach($this->template->get_js('footer') as $js_file) {
                echo $js_file . "\n";
            }
        }

    ?>
</html>
