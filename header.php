<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>

    <?php
        wp_nav_menu(
            array(
                'menu' => 'Main menu',
                'container' => '',
                'theme_location' => 'Main menu',
                'items_wrap' => '<ul id="navbar" class="navbar navbar-expand-lg bg-light">%3$s</ul>'
            )
        )
    ?>
