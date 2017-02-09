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
    // $("#burgerNav").click(function () {
    //     $("header nav ul").toggleClass("openBurger");
    // });
    // $('ul.nav li.dropdown').hover(function() {
    //     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    // }, function() {
    //     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    // });
    $('.memberCarousel').slick({
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

    $('.newCarousel').slick({
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
    new WOW().init();
});
