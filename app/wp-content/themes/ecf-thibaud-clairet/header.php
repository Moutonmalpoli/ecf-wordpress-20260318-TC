<!DOCTYPE html>
<html <?php language_attributes() ?>
    <head>
<?php wp_head() ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> <?php bloginfo('name') ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>

<body>
    <h1>Les villes du monde</h1>
    <nav class="main-navigation">
        <?php wp_nav_menu([
            'theme_location' => 'top-menu',
            'menu_id' => 'top-menu'

        ]); ?>
    </nav>
    <div class="homepage-head-card">
        <img class="homepage-img" src="<?php echo get_template_directory_uri() . '/assets/homepage.png'; ?>">
        <div class="homepage-content">
            <span class="homepage-badge">CLAIRET THIBAUD</span>
            <h2>Les villes du monde</h2>
            <p>Un blog qui vous fait découvrir les régions peu connues de nos grandes villes</p>
        </div>
    </div>
    <div class="site-container">
        <aside class="left-sidebar">
            <?php dynamic_sidebar("left-sidebar") ?>
        </aside>
        <!--FIN HEADER -->