<?php
/**
 * Записи в блоге и в поиске
 */

?>
<article id="post-<?php the_ID(); ?>"  class="row">

        <div class="caption col">

            <h3 class="entry-title">
                <a href="<?= esc_url(get_permalink()) ?>" rel="bookmark"><?php the_title() ?></a>
            </h3>

            <?php if ('post' === get_post_type()) : ?>
                <div class="entry-meta mb-2 small">Время публикации:
                    <?php the_time('j F Y') ?>
                </div>
            <?php endif; ?>

            <?php if (has_post_thumbnail()): ?>
                <div class="float-md-left mb-2 mr-3 mt-1">
                    <div class="post-type post-img">
                        <?php the_post_thumbnail('medium', ['class' => 'img-responsive']); ?>
                    </div>
                </div>
            <? endif; ?>

            <?php the_excerpt(); ?>

            <div class="mb-5">
                <a class="btn btn-outline-primary" href="<?= esc_url(get_permalink()) ?>" rel="bookmark">Читать
                    полностью</a>
            </div>

        </div>

</article><!-- #post-<?php the_ID(); ?> -->
