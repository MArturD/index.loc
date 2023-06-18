$(document).ready(function() {

    $(`#block-person_46`).addClass('visible');
    $(`#46`).addClass('active_card');
    $(`#description-process-1`).addClass('ddr');
    $(`#process-1`).addClass('active_process');
});
    $('.autoplay').slick({
        width: '2511px',
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
                breakpoint: 1400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '40px',
                    centerMode: true,
                }
            }
        ]
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
        $(this).removeClass('ddr');
    })
    $(`#description-${id}`).addClass('ddr');

    console.log(id);
}

function check() {
    $('.examination').on('click', () => {
        if ($('.custom-checkbox').hasClass('checked')) {
            $('.custom-checkbox').removeClass('checked');
        } else {
            $('.custom-checkbox').addClass('checked');
        }
    });
}
check();

$('.open-popup').click(function (e){
    e.preventDefault();
    $('.popup-bg').fadeIn(600);
});
$('.close-popup, .close').click(function (e){
    $('.popup-bg').fadeOut(600);
});




