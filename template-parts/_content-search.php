<?php
/**
 * Шаблон для результатов поиска
 */

?>
<article id="post-<?php the_ID(); ?>" class="row pb-2 pt-4 row">
    <div class="">
        <div class="caption">
            <h3 class="entry-title"><a href="<?= esc_url(get_permalink()) ?>" rel="bookmark"><?php the_title() ?></a></h3>
            <?php if (has_post_thumbnail()): ?>
                <div class="float-md-left m-3 nt-0">
                    <div class="post-type post-img">
                        <?php the_post_thumbnail('medium', ['class' => 'img-responsive']); ?>
                    </div>
                </div>
            <? endif; ?>
            <?php if ('post' === get_post_type()) : ?>
                <div class="entry-meta">Время публикации:
                    <?php the_time('j F Y') ?>
                </div>
            <?php endif; ?>
            <p><?php the_excerpt(); ?></p>
            <div>
                <a href="<?= esc_url(get_permalink()) ?>" rel="bookmark">Читать полностью</a>
            </div>
        </div>
    </div>
</article>


