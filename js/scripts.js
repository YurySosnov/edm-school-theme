$(function() {
    /* START DJLIST SLIDER */
    $('.dj-slider-top .owl-carousel').owlCarousel({
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

    $('.dj-slider-top .djlist-left').click(function () {
        $('.owl-carousel.djlist .owl-prev').trigger('click');
    });

    $('.dj-slider-top .djlist-right').click(function () {
        $('.owl-carousel.djlist .owl-next').trigger('click');
    });

    $(".dj-slider-bottom .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: false
            }
        }
    });
    $(".dj-slider-bottom .left").click(function() {
        $('.dj-slider-bottom .owl-prev').trigger('click');
    });

    $(".dj-slider-bottom .right").click(function() {
        $('.dj-slider-bottom .owl-next').trigger('click');
    });

});