<?php
/**
 * Страница одной записи в блоге
 */
$has_sidebar = is_active_sidebar('sidebar-blog');
get_header();
?>
    <div class="container main">
        <div class="col">
            <div class="row">

                <main id="primary-index" class="site-main col <?= $has_sidebar ? 'col-lg-9' : '' ?>">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'page', get_post_type() );

                        the_post_navigation(
                            array(
                                'prev_text' => '<span class="nav-subtitle">Предыдущая:</span> <span class="nav-title">%title</span>',
                                'next_text' => '<span class="nav-subtitle">Следующая:</span> <span class="nav-title">%title</span>',
                            )
                        );

                        // If comments are open or we have at least one comment, load up the comment template.
                        /*if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;*/

                    endwhile; // End of the loop.
                    ?>
                </main><!-- #main -->

                <?php if ($has_sidebar) : ?>
                    <aside class="col-lg-3 mt-5 mt-lg-0">
                        <?php dynamic_sidebar('sidebar-blog'); ?>
                    </aside>
                <?php endif; ?>

            </div>
        </div>
    </div>

<?php
get_footer();
