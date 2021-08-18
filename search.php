<?php
/**
 * Результаты поиска
 */

get_header();
?>
    <div class="container main">
        <main id="primary-search" class="site-main container">
            <?php if (have_posts()) : ?>

                <header class="mb-4">
                    <?php
                    /* translators: %s: search query. */
                    printf(esc_html__('Результаты поиска для "%s":'),
                        '<strong>' . get_search_query() . '</strong>');
                    ?>
                </header><!-- .page-header -->

                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content');
                endwhile;

                the_posts_navigation();

            else :

                get_template_part('template-parts/content', 'none');

            endif;
            ?>
        </main><!-- #main -->
    </div>
<?php
get_footer();
