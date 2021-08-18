<?php
/**
 * Не найдено постов
 */

?>
<article class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Здесь ничего не нет...', 'dpt'); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content">
        <p><?php esc_html_e('Воспользуйтесь поиском по сайту.',
                'dpt'); ?></p>
        <?php get_search_form(); ?>
    </div><!-- .page-content -->
</article><!-- .no-results -->
