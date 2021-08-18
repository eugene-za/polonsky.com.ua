<!-- ======= Price Section ======= -->
<section id="price" class="faq section-bg">
    <div class="container">

        <?php get_template_part('template-parts/sections/section', 'title', 327); ?>

        <div class="faq-list">
            <ul>
                <?php $i = 0;
                foreach ($args as $prices): ?>
                    <li data-aos="fade-up" data-aos-delay="<?= $i++ * 100 ?>">
                        <i class="bx bx-plus-medical icon-help"></i>
                        <a data-toggle="collapse"
                           class="<?= $i === 1 ? 'collapse' : 'collapsed' ?>"
                           href="#faq-list-<?= $i; ?>">
                            <?= $prices['term']; ?>
                            <i class="bx bx-chevron-down icon-show"></i>
                            <i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-<?= $i ?>"
                             class="collapse <?= $i === 1 ? 'show' : '' ?>"
                             data-parent=".faq-list">
                            <p>
                            <table class="table table-sm table-hover">
                                <tbody>
                                <?php foreach ($prices['posts'] as $post): ?>
                                    <tr>
                                        <td><?= $post['title'] ?></td>
                                        <td>от <?= $post['price'] ?> грн.</td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            </p>
                        </div>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>

    </div>
</section><!-- End Price Section -->