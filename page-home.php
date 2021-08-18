<?php get_header(); ?>
    <main id="main">

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center"
                 style="background-image: url('<?= get_field('home_header_background')['sizes']['home_header_background_thumbnail_size'] ?>') !important">
            <div class="container">
                <h1><?= get_field('home_header_title') ?></h1>
                <h2><?= get_field('home_header_slogan') ?></h2>
                <a href="#appointment" class="btn-get-started scrollto">Записаться на консультацию</a>
            </div>
        </section><!-- End Hero -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3><?= get_field('why_us_title') ?></h3>
                            <p><?= get_field('why_us_text') ?></p>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <?php foreach (get_field('main_advantages') as $block): ?>
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="<?= $block['icon'] ?>"></i>
                                            <h4><?= $block['title'] ?></h4>
                                            <p><?= $block['text'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                         style="background-image: url('<?= get_field('about_us_cover')['sizes']['about_us_cover_thumbnail_size'] ?>') !important">
                        <a href="<?= get_field('about_us_video'); ?>" class="venobox play-btn mb-4" data-vbtype="video"
                           data-autoplay="true"></a>
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3><?= get_field('about_us_title'); ?></h3>
                        <p><?= get_field('about_us_text'); ?></p>

                        <?php foreach (get_field('main_principles') as $block):
                            if ('' !== $block['title']): ?>
                                <div class="icon-box">
                                    <div class="icon"><i class="<?= $block['icon'] ?>"></i></div>
                                    <h4 class="title"><?= $block['title'] ?></h4>
                                    <p class="description"><?= $block['text'] ?></p>
                                </div>
                            <?php endif;
                        endforeach; ?>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <?php get_template_part('template-parts/sections/appointment'); ?>

        <?php get_template_part('template-parts/sections/services', '', get_service_categories()); ?>

        <?php get_template_part('template-parts/sections/prices', '', get_services_prices()); ?>

        <?php get_template_part('template-parts/sections/personnel', '', get_personnel()); ?>

        <?php get_template_part('template-parts/sections/appointment'); ?>

        <?php get_template_part('template-parts/sections/promotions', '', get_promotions()); ?>

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <?php foreach (get_field('counters') as $block):
                        if ('' !== $block['text']): ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="<?= $block['icon'] ?>"></i>
                                    <span data-toggle="counter-up"><?= $block['count'] ?></span>
                                    <p><?= $block['text'] ?></p>
                                </div>
                            </div>
                        <?php endif;
                    endforeach; ?>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <?php get_template_part('template-parts/sections/reviews', '', get_reviews()); ?>

        <?php get_template_part('template-parts/sections/contact'); ?>

    </main>
<?php get_footer();
