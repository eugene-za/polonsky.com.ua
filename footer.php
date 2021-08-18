<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dr.Polonsky_Theme
 */

?>
<?php if(!is_front_page()){
    get_template_part('template-parts/sections/appointment');
}?>
<!-- ======= Footer ======= -->
<footer id="footer" class="mt-2">

    <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>polonsky.com.ua</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://github.com/eugene-za" target="_blank">Eugene Zakharchuk</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <?php global $contacts; ?>

            <?php if(isset($contacts['viber']) && '' !== $contacts['viber']['show']): ?>
                <a title="Напиать в Viber" href="viber://chat?number=<?= $contacts['viber']['value'] ?>" class="viber"><i
                            class="icofont-viber"></i></a>
            <?php endif; ?>

            <?php if(isset($contacts['telegram']) && '' !== $contacts['telegram']['show']): ?>
                <a title="Напиать в Telegram" href="tg://resolve?domain=<?= $contacts['telegram']['value'] ?>" class="telegram"><i
                            class="icofont-telegram"></i></a>
            <?php endif; ?>

            <?php if(isset($contacts['facebook']) && '' !== $contacts['facebook']['show']): ?>
                <a title="Профиль в Facebook" target="_blank" href="<?= $contacts['facebook']['value'] ?>"
                   class="facebook"><i class="icofont-facebook"></i></a>
            <?php endif; ?>

            <?php if(isset($contacts['instagram']) && '' !== $contacts['instagram']['show']): ?>
                <a title="Профиль в Instagram" target="_blank" href="<?= $contacts['instagram']['value'] ?>"
                   class="instagram"><i class="icofont-instagram"></i></a>
            <?php endif; ?>

        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>
