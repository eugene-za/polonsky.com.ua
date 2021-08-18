<!-- ======= Promotions Section ======= -->
<section id="promotions" class="departments">
    <div class="container">

        <?php get_template_part('template-parts/sections/section', 'title', 329); ?>

        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    <?php $i = 1;
                    foreach ($args as $promotion): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $i === 1 ? 'active show' : '' ?>" data-toggle="tab"
                               href="#prom-tab-<?= $i++ ?>">
                                <?= $promotion['name'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    <?php $i = 1;
                    foreach ($args as $promotion): ?>
                        <div class="tab-pane <?= $i === 1 ? 'active show' : '' ?>" id="prom-tab-<?= $i++ ?>">
                            <div class="row">
                                <div class="col-lg-12 details order-2 order-lg-1">
                                    <div class="col-lg-8 text-center order-1 order-lg-2">
                                        <img src="<?= $promotion['thumbnail'] ?>" alt="" class="img-fluid">
                                    </div>
                                    <h3 class="mt-4"><?= $promotion['name'] ?></h3>
                                    <?= $promotion['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Promotions Section -->