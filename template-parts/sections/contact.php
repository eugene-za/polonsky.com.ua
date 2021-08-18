<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <?php get_template_part('template-parts/sections/section', 'title', 330); ?>

    </div>

    <div>
        <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5505.193708663956!2d30.71877372441932!3d46.37738601599427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c7cb51d305eb45%3A0xb59a9f071dd6a0ad!2z0KbQsNGA0YHQutC-0LUg0YHQtdC70L4!5e0!3m2!1sru!2sua!4v1624260161675!5m2!1sru!2sua"
                frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">
        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <?php global $contacts; ?>

                    <?php if (isset($contacts['address']) && '' !== $contacts['address']['show']): ?>
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Адрес:</h4>
                            <p><?= $contacts['address']['show'] ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($contacts['phone']) && '' !== $contacts['phone']['show']): ?>
                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Телефон:</h4>
                            <p>
                                <a href="tel:+380<?= $contacts['phone']['value'] ?>"><?= $contacts['phone']['show'] ?></a>
                            </p>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($contacts['instagram']) && '' !== $contacts['instagram']['show']): ?>
                        <div class="instagram">
                            <i class="icofont-instagram"></i>
                            <h4>Instagram:</h4>
                            <p><a target="_blank"
                                  href="<?= $contacts['instagram']['value'] ?>"><?= $contacts['instagram']['show'] ?></a>
                            </p>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($contacts['email']) && '' !== $contacts['email']['show']): ?>
                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p><a href="mailto:<?= $contacts['email']['value'] ?>"><?= $contacts['email']['show'] ?></a>
                            </p>
                        </div>
                    <?php endif; ?>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
                <?php echo do_shortcode('[wpforms id="256"]'); ?>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->