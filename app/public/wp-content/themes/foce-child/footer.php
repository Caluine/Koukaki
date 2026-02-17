<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<footer id="colophon" class="site-footer">
    <!-- Rajout de la section "oscar" -->
    <section id="oscar" class="section_oscar">
        <div class="oscar_conteneur">
            <h3>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oscar.png" alt="image des oscars">
        </div>
    </section>

    <ul>
        <li><a href="#">Mentions Légales</a></li>
        <li><a href="#">STUDIO KOUKAKI</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>