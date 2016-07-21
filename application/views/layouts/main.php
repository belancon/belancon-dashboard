<?php
if(isset($parts['public_header'])) {
    echo $parts['public_header'];
}

?>

<div class="wrapper">
    <?php
    if(isset($parts['sidebar'])) {
        echo $parts['sidebar'];
    }
    ?>

    <div class="main-panel">
        <?php
            if(isset($parts['navbar'])) {
                echo $parts['navbar'];
            }
        ?>

        <?php $this->load->view('_parts/notification'); ?>
        
        <?php 
            if(isset($content)) {
                echo $content;
            }
        ?>

        <?php
            if(isset($parts['footer'])) {
                echo $parts['footer'];
            }
        ?>

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
