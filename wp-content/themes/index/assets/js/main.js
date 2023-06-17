$(document).ready(function() {

    $(`#block-person_46`).addClass('visible');
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

