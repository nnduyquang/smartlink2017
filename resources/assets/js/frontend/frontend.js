/**
 * Created by nnduy on 27/12/2016.
 */
$(document).ready(function(){
    $("#burgerNav").click(function(){
        $("header nav ul").toggleClass("open");
    });
    $('.memberCarousel').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow:'.arrowPrev',
        nextArrow:'.arrowNext',
        mobileFirst:true,
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
        prevArrow:'.arrowPrev',
        nextArrow:'.arrowNext',
        mobileFirst:true,
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

});
