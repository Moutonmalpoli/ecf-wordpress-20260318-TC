<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head() ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>"> 
</head>
<body>

    <nav class="main-navigation">
        <?php wp_nav_menu([
            'theme_location' => 'top-menu',
            'menu_id' => 'top-menu'
            
        ]); ?>
    </nav>
            <img class="homepage-img" src="<?php echo get_template_directory_uri() . '/assets/homepage.png'; ?>">
<!--FIN HEADER -->
<div class="site-container">
