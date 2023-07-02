$(document).ready(function() {

    $(`#block-person_46`).addClass('visible');
    $(`#46`).addClass('active_card');
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
        centerMode: true,
        // appendArrows: $('.arrowsа'),
        responsive: [
            {
                breakpoint: 1000,
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

function check() {
    $('.checkbox-label').on('click', () => {
        if ($('.checkbox-label').hasClass('checked')) {
            $('.checkbox-label').removeClass('checked');
        } else {
            $('.checkbox-label').addClass('checked');
        }
    });
}
check();

function burgerone() {
    $('.burger-btn').click(function() {
        $('.burger-btn').toggleClass('active-burger');
    });
}
burgerone();
function burgertwo() {
    $('.burger-btn').click(function() {
        $('.menu-burger-wrap').toggleClass('menu-burger-wrap-active');
    });
}
burgertwo();

function closeBurgerMenu() {
    $('.menu-burger-list li').click(function() {
        $('.menu-burger-wrap').removeClass('menu-burger-wrap-active');
        $('.burger-btn').removeClass('active-burger');
    });
}

closeBurgerMenu();






