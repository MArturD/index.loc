<?php
/*
Template Name: home
*/

?>

<?php get_header(); ?>

    <div class="cover">
        <div class="wrap">
            <div class="cover_wrap">
                <div class="cover_left">
                    <div class="cover_text">
                        <h1 class="tagline">
                            <?php the_field( 'main-heading' ); ?>
                        </h1>
                        <p class="tagline_description">
                            <?php the_field( 'main-subtitle' ); ?>
                        </p>
                    </div>
                    <div class="cover_button">
                        <button class="white-button  popmake-84"><?php the_field( 'submit-application' ); ?></button>
                    </div>
                </div>
                <div>

                    <div class="cover_right">
                        <div class="ratchet_left" id="co1">
                            <div class="blur_one"></div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Layer_1ratchet.svg">
                        </div>
                        <div class="ratchet_right" id="co2">
                            <div class="blur_two"></div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Layer_1ratchet%20(1).svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slider" id="portfolio">
    <div class="wrap">
        <div id="slider_text">
            <p class="project_text"><?php the_field( 'projects-text' ); ?></p>
        </div>
    </div>
    <div class="slider_wrap">

        <div class="autoplay">


        <?php
global $post;

$myposts = get_posts([
	'numberposts' => -1,
    'category'    => 2,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>

        <div class="slider_items">
                <div class="item" data-aos="zoom-in" data-aos-duration="600">
                    <div class="color_opacity"><p class="text_opacity">СМОТРЕТЬ ПРОЕКТ</p></div>
                    <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/example1.png"> -->
                    <?php the_post_thumbnail(); ?>
                </div>
                <div data-aos="zoom-in" data-aos-duration="900">
                    <p class="slider_name"> <?php the_title(); ?> </p>
                    <div class="slider_information"><p class="slider_information"> <?php the_content(); ?> </p></div>
                </div>
            </div>

		<?php } } wp_reset_postdata(); // Сбрасываем $post ?>

<!--
            <div class="slider_items">
                <div class="item" data-aos="zoom-in" data-aos-duration="600">
                    <div class="color_opacity"><p class="text_opacity">СМОТРЕТЬ ПРОЕКТ</p></div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/example2.png"></div>
                <div data-aos="zoom-in" data-aos-duration="900">
                    <p class="slider_name">ВИДЕОСЪЕМКА СВАДЕБ</p>
                    <p class="slider_information">Предоставление услуг видеосъемки</p>
                </div>
            </div>
            <div class="slider_items">
                <div class="item" data-aos="zoom-in" data-aos-duration="600">
                    <div class="color_opacity"><p class="text_opacity">СМОТРЕТЬ ПРОЕКТ</p></div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/slider/example3.png"></div>
                <div data-aos="zoom-in" data-aos-duration="900">
                    <p class="slider_name">OMBT POOL</p>
                    <p class="slider_information"> </p>
                </div>
            </div> -->

        </div>
        <div class="wrap">
            <div class="arrows">
                <div class="prev">
                    <button class=" prev_slide"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/slideprev.png"></button>
                </div>
                <div class="next">
                    <button class=" next_slide"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/slidenext.svg"></button>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="about" id="about">
    <div class="wrap">
        <div class="about_wrap">
            <div class="about_title"><p><?php the_field( 'about-text' ); ?></p></div>
            <div class="about_information">
                <div class="title_information"><p><?php the_field( 'about-title' ); ?></p></div>
                <div class="about_description">
                    <div class="left_description">
                        <p><?php the_field( 'about-description-1' ); ?></p>
                        <p><?php the_field( 'about-description-2' ); ?></p>
                    </div>
                    <div class="right_description">
                        <p><?php the_field( 'about-description-3' ); ?></p>
                        <p><?php the_field( 'about-description-4' ); ?></p>
                    </div>
                </div>

                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => -1,
                    'category'    => 3,
                ]);
?>


                <div class="about_team">
                    <div class="team_title"><p><?php the_field( 'our-team-text' ); ?></p></div>
                    <div class="team_information">
                        <div class="team_description">
                            <?php
                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                            <div class="person" id="block-person_<?php the_ID(); ?>">
                                <div class="description_title">
                                    <?php the_content(); ?>
                                </div>
                                <div class="description_avatar">
                                    <div class="avatar card-border"><?php the_post_thumbnail(); ?></div>
                                    <div class="avatar_name"><p><?php the_title(); ?></p></div>
                                </div>
                            </div>
                                <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
                        </div>
                        <div class="team_people">
                            <?php
                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                                    <div class="cards card-border" id="<?php the_ID(); ?>" onclick="setVisible(this) ">
                                        <?php the_post_thumbnail(); ?>
                                    </div>


                                <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services" id="services">
    <div class="wrap">
        <div class="services_title  "><?php the_field( 'services-text' ); ?></div>
        <div class="services_wrap">
            <div class="cards_description">
                <?php the_field( 'services-header' ); ?>
            </div>
            <div class="cards_services" data-aos="zoom-in" data-aos-duration="600">
                <div class="flex_card"><p class="card_name"><?php the_field( 'first-service-title' ); ?></p>
                    <p class="card_info"><?php the_field( 'first-service-description' ); ?></p></div>
                <div class="flex_button">
                    <button class="card_button"><?php the_field( 'choose-text' ); ?></button>
                </div>
            </div>
            <div class="cards_services" data-aos="zoom-in" data-aos-duration="600">
                <div class="flex_card"><p class="card_name"><?php the_field( 'second-service-title' ); ?></p>
                    <p class="card_info"><?php the_field( 'second-service-description' ); ?></p></div>
                <div class="flex_button">
                    <button class="card_button"><?php the_field( 'choose-text' ); ?></button>
                </div>
            </div>
            <div class="cards_services" data-aos="zoom-in" data-aos-duration="600">
                <div class="flex_card"><p class="card_name"><?php the_field( 'third-service-title' ); ?></p>
                    <p class="card_info"><?php the_field( 'third-service-description' ); ?></p></div>
                <div class="flex_button">
                    <button class="card_button"><?php the_field( 'choose-text' ); ?></button>
                </div>
            </div>
            <div class="cards_services" data-aos="zoom-in" data-aos-duration="600">
                <div class="flex_card"><p class="card_name"><?php the_field( 'fourth-service-title' ); ?></p>
                    <p class="card_info"><?php the_field( 'fourth-service-description' ); ?></p></div>
                <div class="flex_button">
                    <button class="card_button"><?php the_field( 'choose-text' ); ?></button>
                </div>
            </div>
            <div class="cards_services" data-aos="zoom-in" data-aos-duration="600">
                <div class="flex_card"><p class="card_name"><?php the_field( 'fifth-service-title' ); ?></p>
                    <p class="card_info"><?php the_field( 'fifth-service-description' ); ?></p></div>
                <div class="flex_button">
                    <button class="card_button"><?php the_field( 'choose-text' ); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="stages">
    <div class="wrap">
        <div class="stages_wrap">
            <div class="stages_title"><p><?php the_field( 'stages -development-title' ); ?></p></div>
            <div class="process_flex">
            <ol class="process_work">
                <li class="process_card" onclick="process(this)" id="process-1" ><span>1.</span><p><?php the_field( 'first-stage' ); ?></p></li>
                <li class="process_card" id="process-2" onclick="process(this)"><span>2.</span><p><?php the_field( 'second-stage' ); ?></p></li>
                <li class="process_card" id="process-3" onclick="process(this)"><span>3.</span><p><?php the_field( 'third-stage' ); ?></p></li>
                <li class="process_card" id="process-4" onclick="process(this)"><span>4.</span><p><?php the_field( 'fourth-stage' ); ?></p></li>
                <li class="process_card" id="process-5" onclick="process(this)"><span>5.</span><p><?php the_field( 'fifth-stage' ); ?></p></li>
            </ol>
            <div class="process_description">
                <div class="block-description" id="description-process-1"><?php the_field( 'first-stage-description' ); ?></div>
                <div class="block-description" id="description-process-2"><?php the_field( 'second-stage-description' ); ?></div>
                <div class="block-description" id="description-process-3"><?php the_field( 'third-stage-description' ); ?></div>
                <div class="block-description" id="description-process-4"><?php the_field( 'fourth-stage-description' ); ?></div>
                <div class="block-description" id="description-process-5"><?php the_field( 'fifth-stage-description' ); ?></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="cooperation">
    <div class="wrap">
        <div class="cooperation_wrap">
            <div class="cooperation_title">СОТРУДНИЧЕСТВО</div>
            <div class="application">
                <div class="application_title"><p>Готовы обсудить проект?</p></div>
                <div class="application_description"><p>Оставьте заявку и мы свяжемся с вами в течение 24 часов.</p></div>
                <button class="application_button "><?php the_field( 'submit-application' ); ?></button>
            </div>
        </div>
    </div>
</div>
<div class="popup-bg">
    <div class="close">

    </div>
    <div class="popup">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/close.png" class="close-popup">
    <?php echo do_shortcode('[contact-form-7 id="74" title="Contact form"]')?>
    </div>
</div>
<!--    <div class="form">-->
<!--        <div class="form-left">-->
<!--            <div class="form-title">Обсудим ваш проект</div>-->
<!--            <input type="text" name="" id="" class="input-text input-description" placeholder="Напишите вашу отрасль*">-->
<!--            <div class="border"></div>-->
<!--            <div class="form-name-email">-->
<!--                <div class="form-name">-->
<!--                    <input type="text" class="input-text input-name" placeholder="Имя*">-->
<!--                    <div class="border"></div>-->
<!--                </div>-->
<!--                <div>-->
<!--                    <input type="email" class="input-text input-email" placeholder="Электронная почта*">-->
<!--                    <div class="border"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="number">-->
<!--                <input type="number" class="input-text" placeholder="Телефон*">-->
<!--                <div class="border"></div>-->
<!--            </div>-->
<!--            <div class="textarea">-->
<!--                <p>Пожалуйста, опишите требования вашего проекта *</p>-->
<!--                <textarea name="" id="" cols="30" rows="10" class="textarea-input"></textarea>-->
<!--            </div>-->
<!--            <div class="custom-file">-->
<!--                <label class="border-file custom-file-label">Прикрепить файл-->
<!--                <input type="file" class="custom-file-input">-->
<!--                </label>-->
<!--                <p class="custom-file-p">Можно прикрепить не более 3 файлов размером до 3 МБ каждый. Форматы doc, docx, pdf, ppt, pptx.</p>-->
<!--            </div>-->
<!--            <div class="checkbox">-->
<!--                <label class="checkbox-label">-->
<!--                    <input type="checkbox" class="real-checkbox">-->
<!--                <span class="custom-checkbox"></span>-->
<!--                   Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности-->
<!--                </label>-->
<!--            </div>-->
<!--            <div>-->
<!--                <button class="button-two border-blue">Отправить</button>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <div class="form-right">-->
<!--            <div class="title-right">Связаться с нами:</div>-->
<!--            <div class="number-right">+7 (921) 157-77-77</div>-->
<!--            <div class="email-right">info@gmail.com</div>-->
<!--        </div>-->
<!--    </div>-->

<?php get_footer(); ?>