<footer>
    <div class="wrap">
        <div class="band"></div>
        <div class="footer-wrap-desctop" id="contacts">
                <div class="footer_logo">
                    <?php the_custom_logo($blog_id); ?>
                </div>
            <div class="footer_navigation">
                <p class="footer-title-one"><?php the_field('navigation-text-one'); ?></p>

                <ul>
                    <li><a href="#portfolio"><?php the_field('portfolio-text'); ?></a></li>
                    <li><a href="#about"><?php the_field('about-text'); ?></a></li>
                    <li><a href="#services"><?php the_field('services-text'); ?></a></li>
                </ul>
            </div>
            <div class="footer_social" >
                <p class="footer-title-two"><?php the_field('navigation-text-two'); ?></p>
                <p class="footer_number"><a href=”tel:<?php the_field('tel-link'); ?>;”><?php the_field('tel-title'); ?></a></p>
                <p class="footer_mail"><a class="mail-link" href="mailto:<?php the_field('email-link'); ?>;"><?php the_field('email-title'); ?></a></p>
                <div class="social_cards">
                    <div class="social_card"><a href="<?php the_field('tg-link'); ?>"><img
                                    src="<?php bloginfo('template_url'); ?>/assets/img/icons/tg-icon.svg"></a></div>
                    <div class="social_card"><a href="<?php the_field('insta-link'); ?>"><img
                                    src="<?php bloginfo('template_url'); ?>/assets/img/icons/insta-icon.svg"></a>
                    </div>
                    <div class="social_card"><a href="mailto:<?php the_field('email-link'); ?>"><img
                                    src="<?php bloginfo('template_url'); ?>/assets/img/icons/email-icon.svg"></a>
                    </div>
                </div>
            </div>
        </div>

            <div class="footer-wrap-mobile" id="contacts">

            <div class="flex-footer-one">
                <div class="footer_logo">
                    <?php the_custom_logo($blog_id); ?>
                </div>

                <div class="footer_navigation">
                    <p class="footer-title-one"><?php the_field('navigation-text-one'); ?></p>

                    <ul>
                        <li><a href="#portfolio"><?php the_field('portfolio-text'); ?></a></li>
                        <li><a href="#about"><?php the_field('about-text'); ?></a></li>
                        <li><a href="#services"><?php the_field('services-text'); ?></a></li>
                    </ul>
                </div>

            </div>

            <div class="flex-footer-two">

                <div class="footer_social" id="contacts">
                    <p class="footer-title-two"><?php the_field('navigation-text-two'); ?></p>
                    <p class="footer_number"><a href=”tel:<?php the_field('tel-link'); ?>;”><?php the_field('tel-title'); ?></a></p>

                    <p class="footer_mail"><a class="mail-link" href="mailto:2004misiryun@gmail.com"><?php the_field('email-title'); ?></a></p>


                    <div class="social_cards">
                        <div class="social_card"><a href="<?php the_field('tg-link'); ?>"><img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/tg-icon.svg"></a></div>
                        <div class="social_card"><a href="<?php the_field('insta-link'); ?>"><img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/insta-icon.svg"></a>
                        </div>
                        <div class="social_card"><a href="mailto:<?php the_field('email-link'); ?>;"><img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/email-icon.svg"></a>
                        </div>
                    </div>
                </div>

            </div>
            </div>


        <div class="band"></div>
        <div class="privacy_policy"><a href="">Политика конфиденциальности</a></div>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="assets/slick/slick.min.js"></script> -->
<!-- <script src="assets/js/main.js"></script> -->
<?php
wp_footer();
?>
<script>
    AOS.init();
</script>
</body>
</html>