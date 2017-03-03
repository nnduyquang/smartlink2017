/**
 * Created by nnduy on 27/12/2016.
 */
$(document).ready(function () {
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 50) {
            $('.hero-unit').addClass('fixed');
        } else {
            $('.hero-unit').removeClass('fixed');
        }
    });
    function memberCarousel(){
        $('.memberCarousel').not('.slick-initialized').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '.arrowPrev1',
            nextArrow: '.arrowNext1',
            mobileFirst: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            }, {

                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 480,
                slidesToShow: 1,
                slidesToScroll: 1,
            }]
        });
    }
    memberCarousel();
    function newCarousel(){
        $('.newCarousel').not('.slick-initialized').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '.arrowPrev',
            nextArrow: '.arrowNext',
            mobileFirst: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            }, {

                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 480,
                slidesToShow: 1,
                slidesToScroll: 1,
            }]
        });
    }
    newCarousel();




    // if ($("#hieuSuat").length) {
    new WOW().init();
    // }
});
