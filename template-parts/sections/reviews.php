<!-- ======= Reviews Section ======= -->
<section id="reviews" class="testimonials">
    <div class="container">

        <?php get_template_part('template-parts/sections/section', 'title', 332); ?>

        <div class="owl-carousel testimonials-carousel">

            <?php foreach ($args as $review) : ?>
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <img src="" class="testimonial-img" alt="">
                        <h3><?= $review['name'] ?></h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            <?= $review['text'] ?>
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section><!-- End Reviews Section -->