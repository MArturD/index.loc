$(document).ready(function() {

    $(`#block-person_218`).addClass('visible');
    $(`#218`).addClass('active_card');
    $(`#description-process-1`).addClass('checking-process');
        $(`#process-1`).addClass('active_process');
});
    $('.autoplay').slick({
        // width: '2511px',
        arrows: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        slidesToShow: 2,
        infinite: true,
        slidesToScroll: 1,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 1000,
        // centerMode: true,
        // appendArrows: $('.arrowsа'),
        responsive: [
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                    autoplay: false,
                    autoplaySpeed: 1000,
                    centerMode: false,
                }
            }
        ]
    });
$('.stages-slide').slick({
    arrows: true,
    prevArrow: $('.prev-1'),
    nextArrow: $('.next-1'),
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
});


    function setVisible(staff) {
        let id = $(staff).attr('id');
        $('.person').each(function () {
            $(this).removeClass('visible');
        })
        $(`#block-person_${id}`).addClass('visible');
    }

function toggleBlocks() {
    $('.cards').click(function() {
        $('.cards').removeClass('active_card');
        $(this).addClass('active_card');
    });
}
toggleBlocks();
function active_process() {
    $('.process_card').click(function() {
        $('.process_card').removeClass('active_process');
        $(this).addClass('active_process');
    });
}
active_process();

function process (staff) {
    let id = $(staff).attr('id');
    $('.block-description').each(function () {
        $(this).removeClass('checking-process');
    })
    $(`#description-${id}`).addClass('checking-process');
}

function burgerone() {
    $('.burger-btn').click(function() {
        $('.burger-btn').toggleClass('active-burger');
        $('body').toggleClass('no-scroll');
    });
}
burgerone();
function burgertwo() {
    $('.burger-btn').click(function() {
        $('.burger-wrap').toggleClass('menu-burger-active');
        $('.menu-burger').toggleClass('burger-animate');

    });
}
burgertwo();
function burgerclose() {
    $('.burger-close').click(function() {
        $('.burger-wrap').removeClass('menu-burger-active');
        $('.burger-btn').removeClass('active-burger');
        $('body').removeClass('no-scroll');
        $('.menu-burger').removeClass('burger-animate');
    });
}
burgerclose();







