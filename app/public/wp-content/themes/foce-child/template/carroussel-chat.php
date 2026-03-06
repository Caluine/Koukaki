<?php
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',
);

$characters_query = new WP_Query($args);

if ($characters_query->have_posts()) :
?>

<section class="personnages">
    <article id="characters">

        <div class="main-character">
            <h3 class="titre">
                <span>Les</span>
                <span>personnages</span>
            </h3>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">

                <?php while ($characters_query->have_posts()) :
                    $characters_query->the_post(); ?>

                    <div class="swiper-slide">
                        <figure>
                            <?php the_post_thumbnail('full'); ?>
                            <figcaption><?php the_title(); ?></figcaption>
                        </figure>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>

    </article>
</section>

<?php
wp_reset_postdata();
endif;
?>