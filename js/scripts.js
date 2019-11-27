$(function() {
    /* START DJLIST SLIDER */
    $('.owl-carousel.djlist').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: 'URLHash',
        responsive: {
            0: {
                items: 0,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: false
            },
            1500: {
                items: 5,
                nav: false
            }
        }
    });

    $('.djlist-left').click(function () {
        $('.owl-carousel.djlist .owl-prev').trigger('click');
    });

    $('.djlist-right').click(function () {
        $('.owl-carousel.djlist .owl-next').trigger('click');
    });
});