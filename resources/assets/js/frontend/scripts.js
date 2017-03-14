// "use strict";
var plugins={
    memberCarousel:$('.memberCarousel'),
    newCarousel:$('.newCarousel'),
    wayPointHieuSuat:$('#hieuSuat'),
    rdNavbar: $(".rd-navbar")
};
$(document).ready(function () {
    function memberCarousel(){
        plugins.memberCarousel.not('.slick-initialized').slick({
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
    function newCarousel(){
        plugins.newCarousel.not('.slick-initialized').slick({
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
    function wayPointHieuSuat(){
        var waypoint = new Waypoint({
            element: document.getElementById('hieuSuat'),
            handler: function () {
                var options1 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '+'
                };
                var options2 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '%'
                };
                var numHs1 = new CountUp("hs1", 0, 500, 0, 1.5, options1);
                var numHs2 = new CountUp("hs2", 0, 1000, 0, 2, options1);
                var numHs3 = new CountUp("hs3", 0, 100, 0, 2.2, options2);
                var numHs4 = new CountUp("hs4", 0, 500, 0, 2, options1);
                numHs1.start();
                numHs2.start();
                numHs3.start();
                numHs4.start();

                waypoint.disable();
            },
            offset: '85%'
        })
    }
    function rdNavBar() {
        plugins.rdNavbar.RDNavbar({
            stickUpClone: (plugins.rdNavbar.attr("data-stick-up-clone")) ? plugins.rdNavbar.attr("data-stick-up-clone") === 'true' : false,
            stickUpOffset: (plugins.rdNavbar.attr("data-stick-up-offset")) ? plugins.rdNavbar.attr("data-stick-up-offset") : 1,
            anchorNavOffset: -78
        });
        if (plugins.rdNavbar.attr("data-body-class")) {
            document.body.className += ' ' + plugins.rdNavbar.attr("data-body-class");
        }
    }

    if(plugins.memberCarousel.length){
        memberCarousel();
    }
    if(plugins.newCarousel.length){
        newCarousel();
    }
    if(plugins.wayPointHieuSuat.length){
        wayPointHieuSuat();
    }
    if(plugins.rdNavbar.length){
        rdNavBar()
    }

    new WOW().init();
});