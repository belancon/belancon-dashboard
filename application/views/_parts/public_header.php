<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <?php
        // Page Title
        if(isset($theme['assets']['header']['title']))
            echo $this->template->get_title() . "\n";

        // Meta Tags
        if(isset($theme['assets']['header']['meta'])) {
            foreach($this->template->get_meta() as $meta_tag) {
                echo $meta_tag . "\n";
            }
        }

        // Custom CSS Files
        if(isset($theme['assets']['header']['css'])) {
            foreach($this->template->get_css() as $css_file) {
                echo $css_file . "\n";
            }
        }

        // Custom JS Files
        if(isset($theme['assets']['header']['js'])) {
            foreach($this->template->get_js('header') as $js_file) {
                echo $js_file . "\n";
            }
        }
    ?>

    <script type="text/javascript">
        BASE_URL = '<?php echo base_url();?>';
    </script>
</head>
<body>