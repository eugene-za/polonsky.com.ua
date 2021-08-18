<!-- ======= Services Section ======= -->
<section id="services" class="departments">
    <div class="container">

        <?php get_template_part('template-parts/sections/section', 'title', 326); ?>

        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    <?php $i = 1;
                    foreach ($args as $service): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $i === 1 ? 'active show' : '' ?>" data-toggle="tab"
                               href="#tab-<?= $i++ ?>">
                                <?= $service['name'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    <?php $i = 1;
                    foreach ($args as $service): ?>
                        <div class="tab-pane <?= $i === 1 ? 'active show' : '' ?>" id="tab-<?= $i++ ?>">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3><?= $service['name'] ?></h3>
                                    <?= $service['description'] ?>

                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="<?= $service['thumbnail']['sizes']['services_thumbnail_size'] ?>" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Departments Section -->