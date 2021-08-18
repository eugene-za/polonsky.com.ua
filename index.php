<?php
/**
 * Шаблон для блога
 */

$has_sidebar = is_active_sidebar('sidebar-blog');

get_header();
?>
    <div class="container main">
        <div class="col">
            <div class="row">

                <main id="primary-index" class="site-main col <?= $has_sidebar ? 'col-lg-9' : '' ?>">
                    <?php if (have_posts()) : while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/content', get_post_type());
                    endwhile;
                        the_posts_navigation();
                    else :
                        get_template_part('template-parts/content', 'none');
                    endif; ?>
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
