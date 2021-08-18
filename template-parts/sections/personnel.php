<!-- ======= Personnel Section ======= -->
<section id="personnel" class="doctors">
    <div class="container">

        <?php get_template_part('template-parts/sections/section', 'title', 328); ?>

        <div class="row">

            <?php foreach ($args as $person) : ?>
                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="<?= $person['photo'] ?>" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4><?= $person['name'] ?></h4>
                            <span><?= $person['position'] ?></span>
                            <p><?= $person['slogan'] ?></p>
                            <div class="social">
                                <?php foreach ($person['contacts'] as $type => $link) :
                                    if ('' !== $link) :
                                        $icon = '';
                                        switch ($type) {
                                            case 'facebook' :
                                                $icon = 'ri-facebook-fill';
                                                break;
                                            case 'instagram' :
                                                $icon = 'ri-instagram-fill';
                                                break;
                                            case 'twitter' :
                                                $icon = 'ri-twitter-fill';
                                                break;
                                            case 'email' :
                                                $icon = 'ri-mail-line';
                                                $link = 'mailto:' . $link;
                                                break;
                                        }
                                        ?>
                                        <a target="_blank" href="<?= $link ?>"><i class="<?= $icon ?>"></i></a>
                                    <?php endif;
                                endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section><!-- End Personnel Section -->