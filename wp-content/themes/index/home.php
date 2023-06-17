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
                        <p class="tagline">
                            Преобразуем вашу веб-идею в действительность
                        </p>
                        <p class="tagline_description">
                            Вы получаете привлекательный дизайн и безупречную функциональность в сжатые сроки и по
                            доступной стоимости.
                        </p>
                    </div>
                    <div class="cover_button">
                        <button class="white-button">Оставить заявку</button>
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

<div class="slider">
    <div class="wrap">
        <div id="slider_text">
            <p class="project_text">ПРОЕКТЫ</p>
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
<div class="about">
    <div class="wrap">
        <div class="about_wrap">
            <div class="about_title"><p>О нас</p></div>
            <div class="about_information">
                <div class="title_information"><p>Наша компания специализируется на веб-разработке и использует
                    передовые технологии и инструменты, чтобы обеспечить клиентам лучшие результаты.</p></div>
                <div class="about_description">
                    <div class="left_description">
                        <p>Наш подход основан на полном цикле разработки сайтов, что означает, что мы охватываем все
                            этапы создания вашего сайта. Начиная с исследования и понимания ваших потребностей и целей,
                            мы разрабатываем уникальный дизайн, который не только привлекает внимание, но и предлагает
                            превосходный пользовательский опыт. </p>
                        <p>Наш подход основан на полном цикле разработки сайтов, что означает, что мы охватываем все
                            этапы создания вашего сайта. Начиная с исследования и понимания ваших потребностей и целей,
                            мы разрабатываем уникальный дизайн, который не только привлекает внимание, но и предлагает
                            превосходный пользовательский опыт. </p>
                    </div>
                    <div class="right_description">
                        <p>Наша команда разработчиков и дизайнеров обладает глубокими знаниями и опытом, что позволяет
                            нам создавать индивидуальные решения, которые точно соответствуют вашим требованиям. Мы
                            также обеспечиваем полное тестирование и оптимизацию вашего сайта, чтобы гарантировать его
                            высокую производительность и быструю загрузку.</p>
                        <p>В Index мы не только создаем веб-сайты, но и строим долгосрочные партнерства с нашими
                            клиентами. Мы всегда готовы поддержать вас после запуска сайта, предлагая техническую
                            поддержку, обновления и дальнейшее развитие.</p>
                    </div>
                </div>
<!--                --><?php
//                global $post;
//
//                $myposts = get_posts([
//                    'numberposts' => -1,
//                    'category'    => 3,
//                ]);
//
//                if( $myposts ){
//                    foreach( $myposts as $post ){
//                        setup_postdata( $post );
//                        ?>
<!--                       --><?php
//                        $staff = [
//                        ['id' => 1, 'name' => 'John1', 'image' => 'john.png', 'text' => '1'],
/*                            ['id' => 2, 'name' => '<?php the_title(); ?>', 'image' => '<?php the_post_thumbnail(); ?>', 'text' => '<?php the_content(); ?>'],*/
//                            ['id' => 3, 'name' => 'John3', 'image' => 'john.png3', 'text' => '3'],
//
//                        ];
//                        ?>
<!--                    --><?php //} } wp_reset_postdata(); // Сбрасываем $post ?>


                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => -1,
                    'category'    => 3,
                ]);
?>


                <div class="about_team">
                    <div class="team_title"><p>НАША КОМАНДА</p></div>
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
                                    <div class="avatar"><?php the_post_thumbnail(); ?></div>
                                    <div class="avatar_name"><p><?php the_title(); ?></p></div>
                                </div>
                            </div>
                                <?php } } wp_reset_postdata(); // Сбрасываем $post ?>

<!--                            --><?php //foreach ($staff as $person): ?>
<!--                            <div class="person" id="block-person_--><?php //echo $person["id"] ?><!--">-->
<!--                                <div class="description_title">-->
<!--                                --><?php //echo $person["text"] ?>
<!--                            </div>-->
<!--                            <div class="description_avatar">-->
<!--                                <div class="avatar">--><?php //echo $person["image"] ?><!--</div>-->
<!--                                <div class="avatar_name"><p>--><?php //echo $person["name"] ?><!--</p></div>-->
<!--                            </div>-->
<!--                            </div>-->
<!--                            --><?php //endforeach; ?>
                        </div>
                        <div class="team_people">
                            <?php
                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                                    <div class="cards" id="<?php the_ID(); ?>" onclick="setVisible(this) ">
                                        <?php the_post_thumbnail(); ?>
                                    </div>


                                <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
                        </div>
<!--                        <div class="team_people">-->
<!--                            --><?php //foreach ($staff as $person): ?>
<!--                            <div class="cards" id="--><?php //echo $person["id"] ?><!--" onclick="setVisible(this) ">-->
<!--                                --><?php //echo $person["image"] ?>
<!--                            </div>-->
<!--                            --><?php //endforeach; ?>
<!--                            <div class="cards"><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/icons/avatar_murat.svg"></div>-->
<!--                            <div class="cards"><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/icons/avatar_murat.svg"></div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services">
    <div class="wrap">
        <div class="services_title  ">УСЛУГИ</div>
        <div class="services_wrap">
            <div class="cards_description">Обратите внимание, чтобы точно назвать стоимость проекта, нам надо
                созвониться и обсудить детали, после чего формируется коммерческое предложение.
            </div>
            <div class="cards_services" data-aos="zoom-in" data-aos-duration="600">
                <div class="flex_card"><p class="card_name">Лендинг</p>
                    <p class="card_info">Имиджевые лендинги, посадочные страницы, сайты-визитки, промо. Состоит обычно
                        из 7 — 12 блоков</p></div>
                <div class="flex_button">
                    <button class="card_button">Выбрать</button>
                </div>
            </div>
            <div class="cards_services" data-aos="zoom-in" data-aos-duration="600">
                <div class="flex_card"><p class="card_name">Лендинг</p>
                    <p class="card_info">Имиджевые лендинги, посадочные страницы, сайты-визитки, промо. Состоит обычно
                        из 7 — 12 блоков</p></div>
                <div class="flex_button">
                    <button class="card_button">Выбрать</button>
                </div>
            </div>
            <div class="cards_services" data-aos="zoom-in" data-aos-duration="600">
                <div class="flex_card"><p class="card_name">Лендинг</p>
                    <p class="card_info">Имиджевые лендинги, посадочные страницы, сайты-визитки, промо. Состоит обычно
                        из 7 — 12 блоков</p></div>
                <div class="flex_button">
                    <button class="card_button">Выбрать</button>
                </div>
            </div>
            <div class="cards_services" data-aos="zoom-in" data-aos-duration="600">
                <div class="flex_card"><p class="card_name">Лендинг</p>
                    <p class="card_info">Имиджевые лендинги, посадочные страницы, сайты-визитки, промо. Состоит обычно
                        из 7 — 12 блоков</p></div>
                <div class="flex_button">
                    <button class="card_button">Выбрать</button>
                </div>
            </div>
            <div class="cards_services" data-aos="zoom-in" data-aos-duration="600">
                <div class="flex_card"><p class="card_name">Лендинг</p>
                    <p class="card_info">Имиджевые лендинги, посадочные страницы, сайты-визитки, промо. Состоит обычно
                        из 7 — 12 блоков</p></div>
                <div class="flex_button">
                    <button class="card_button">Выбрать</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="stages">
    <div class="wrap">
        <div class="stages_wrap">
            <div class="stages_title"><p>ЭТАПЫ РАЗРАБОТКИ</p></div>
            <div class="process_flex">
            <ol class="process_work">
                <li class="active_process process_card" ><span>1.</span><p>Заявка на проект и созвон</p></li>
                <li class="process_card" ><span>2.</span><p>Коммерческое предложение и договор</p></li>
                <li class="process_card" ><span>3.</span><p>Сбор данных и прототип</p></li>
                <li class="process_card" ><span>4.</span><p>Дизайн всех страниц в фигме</p></li>
                <li class="process_card" ><span>5.</span><p>Разработка сайта</p></li>
            </ol>
            <div class="process_description">
                <p>Первым шагом в нашем сотрудничестве является подача заявки на проект. Это дает нам представление о том, что вы ищете и погрузиться в ваш проект глубже.</p>
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
                <button class="application_button ">Оставить заявку</button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>