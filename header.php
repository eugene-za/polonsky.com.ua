<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Google Fonts -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php global $contacts; $contacts = get_contacts(); ?>
<?php global $section_headers; $section_headers = get_section_headers(); ?>
<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center<?= is_front_page() ? ' fixed-top' : ' relative-top' ;?>">
    <div class="container d-flex">
        <div class="contact-info mr-auto">

            <?php if(isset($contacts['email']) && '' !== $contacts['email']['show']): ?>
                <i class="icofont-envelope"></i>
                <a href="mailto:<?= $contacts['email']['value'] ?>"><?= $contacts['email']['show'] ?></a>
            <?php endif; ?>

            <?php if(isset($contacts['phone']) && '' !== $contacts['phone']['show']): ?>
                <i class="icofont-phone"></i>
                <a href="tel:+380<?= $contacts['phone']['value'] ?>"><?= $contacts['phone']['show'] ?></a>
            <?php endif; ?>

            <?php if(isset($contacts['address']) && '' !== $contacts['address']['show']): ?>
                <i class="icofont-google-map"></i>
                <?= $contacts['address']['show'] ?>
            <?php endif; ?>

        </div>

        <div class="social-links">

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
</div>

<!-- ======= Header ======= -->
<header id="header" class="<?php if(is_front_page()) echo ' fixed-top';?>">
    <div class="container d-flex align-items-center">
        <?php
        $logo_img = '<img src="' . get_template_directory_uri() . '/assets/images/site-logo.png" alt="" style="width:100%">';
        if ($custom_logo_id = get_theme_mod('custom_logo')) {
            $logo_img = wp_get_attachment_image($custom_logo_id, 'full', false, array(
                'class'    => 'img-fluid',
                'itemprop' => 'logo',
            ));
        }
        $logo_img_tag_name = (is_front_page() && is_home()) ? 'h1' : 'p';
        ?>

        <<?php echo $logo_img_tag_name; ?> class="logo mr-auto" style="position: relative; overflow: hidden">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo mr-auto">
            <?php echo $logo_img; ?>
        </a>
        <span style="position: absolute; top:-1000px">Стоматологическая клиника доктора Полонкого</span>
    </<?php echo $logo_img_tag_name; ?>>

    <nav class="nav-menu d-none d-lg-block">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'container'      => false,
                'walker'         => new Dpt_Header_Menu,
            )
        );
        ?>
    </nav><!-- .nav-menu -->

    <a href="#appointment" class="appointment-btn scrollto">Записаться</a>

    </div>
</header><!-- End Header -->
