<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <nav class="main-navigation">
                <div class="nav-container">
                    <div class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                    </div>
                    <button id="menu-toggle" class="menu-toggle" aria-label="Ouvrir le menu">
                        <span class="menu-toggle-bar menu-toggle-bar-top"></span>
                        <span class="menu-toggle-bar menu-toggle-bar-middle"></span>
                        <span class="menu-toggle-bar menu-toggle-bar-bottom"></span>
                    </button>
                </div>
                <div class="menu-deroulant">
                    <ul class="nav-menu">
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-menu.png" alt="logo studio Koukaki"></li>
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <div class="menu-footer">
                        <p>STUDIO KOUKAKI</p>
                    </div>
                    <div class="chat-menu">
                        <div class="chat-noir">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chat-noir.png" alt="chat noir">
                        </div>
                        <div class="chat-violet">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chat-violet.png" alt="chat violet">
                        </div>
                        <div class="chat-orange">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chat-orange.png" alt="chat orange">
                        </div>
                    </div>
                    <div class="fleur-menu">
                        <div class="fleur-orange">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fleur-orange.png" alt="fleur orange">
                        </div>
                        <div class="fleur-blanche">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fleur-blanche.png" alt="fleur blanche">
                        </div>
                        <div class="fleur-violette">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/orchid.png'; ?>" alt="fleur violette">
                        </div>
                        <div class="fleur-coin">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/hibiscus_footer.png'; ?>" alt="grande fleur ">
                        </div>
                        <div class="fleur-droite">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/random_flower.png'; ?>" alt="petite fleur violette">
                        </div>
                    </div>
                </div>
    </div>
    </nav>
    </header>