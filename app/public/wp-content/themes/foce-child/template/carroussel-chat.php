<section class="personnages">
    <article id="characters">

        <div class="main-character">
            <h3 class="titre">
                <span>Les</span>
                <span>personnages</span>
            </h3>
        </div>
        <?php
        // requete wp_query pour récupérer tous les chats dans wordpress
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',

        );
        $characters_query = new WP_Query($args);
        ?>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php
                // 2. utilisation d'une boucle en utilisant https://swiperjs.com/
                while ($characters_query->have_posts()) {
                    $characters_query->the_post();
                    echo '<div class="swiper-slide">';
                    echo '<figure>';
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
                    echo '<img src="' . $url . '" />';
                    echo '<figcaption>';
                    the_title();
                    echo '</figcaption>';
                    echo '</figure>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>


    </article>
</section>