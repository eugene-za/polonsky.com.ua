<?php
/**
 * Шаблон для страницы
 */
?>
<article id="post-<?php the_ID(); ?>" class="row pb-2 pt-4">

    <div class="col">

        <div class="caption">
            <h1 class="entry-title mb-5"><?php the_title() ?></h1>
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium_large', ['class' => 'alignleft mt-3', 'height' => 'auto']); ?>
            <? endif; ?>
            <p><?php the_content() ?></p>
        </div>

        <?php if (get_edit_post_link()) : ?>
            <footer class="entry-footer">
                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __('Редактировать <span class="screen-reader-text">%s</span>', 'dpt'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post(get_the_title())
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
            </footer>
        <?php endif; ?>
    </div>


</article><!-- #post-<?php the_ID(); ?> -->
