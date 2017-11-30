<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Appel du fichier style.css de notre thème -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script async src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script async src="assets/build/js/main.min.js"></script>


    <!--
        Tout le contenu de la partie head de mon site
     -->

    <!-- Execution de la fonction wp_head() obligatoire ! -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="container-fluid">
    <header id="header" class="row">
        <div class="logo">
            <a href=" <?php echo get_option('home'); ?>/"><img src="<?= IMAGES_URL;?>/logo.png" alt=""></a>
        </div>
        <div class="menu-icon">
            <div class="line line-outer"></div>
            <div class="line line-center"></div>
            <div class="line line-outer"></div>
            <p class="menu-name">MENU</p>
        </div>
        <div class="menu-wrapper menu-hidden col-md-6">

            <div class="menu-wrapper__list">
            <?php
            $args=array(
                'theme_location' => 'header', // nom du slug
                'menu' => 'header_fr', // nom à donner cette occurence du menu
                'menu_class' => 'menu_header', // class à attribuer au menu
                'menu_id' => 'menu_id' // id à attribuer au menu
                // voir les autres arguments possibles sur le codex
            );
            wp_nav_menu($args);
            ?>
            </div>
        </div>
    </header>
</div>