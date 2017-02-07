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
    $("#burgerNav").click(function () {
        $("header nav ul").toggleClass("open");
    });
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
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

    // var waypoint = new Waypoint({
    //     element: document.getElementById('hieuSuat'),
    //     handler: function () {
    //         var options1 = {
    //             useEasing: true,
    //             useGrouping: false,
    //             separator: ',',
    //             decimal: '.',
    //             prefix: '',
    //             suffix: '+'
    //         };
    //         var options2 = {
    //             useEasing: true,
    //             useGrouping: false,
    //             separator: ',',
    //             decimal: '.',
    //             prefix: '',
    //             suffix: '%'
    //         };
    //         var numHs1 = new CountUp("hs1", 0, 500, 0, 1.5, options1);
    //         var numHs2 = new CountUp("hs2", 0, 1000, 0, 2, options1);
    //         var numHs3 = new CountUp("hs3", 0, 100, 0, 2.2, options2);
    //         var numHs4 = new CountUp("hs4", 0, 500, 0, 2, options1);
    //         numHs1.start();
    //         numHs2.start();
    //         numHs3.start();
    //         numHs4.start();
    //
    //         waypoint.disable();
    //     },
    //     offset: '85%'
    // })

});
