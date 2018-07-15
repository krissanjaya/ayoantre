(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function () {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 54
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink nav-pad-0");
            $(".navbar-brand>text").addClass("invisible");
            $(".navbar-nav>li>a").addClass("text-normalize");
        } else {
            $("#mainNav").removeClass("navbar-shrink nav-pad-0");
            $(".navbar-brand>text").removeClass("invisible");
            $(".navbar-nav>li>a").removeClass("text-normalize");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    $('.carousel-sync').on('slide.bs.carousel', function (ev) {
        // get the direction, based on the event which occurs
        var dir = ev.direction == 'right' ? 'prev' : 'next';
        // get synchronized non-sliding carousels, and make'em sliding
        $('.carousel-sync').not('.sliding').addClass('sliding').carousel(dir);
    });
    $('.carousel-sync').on('slid.bs.carousel', function (ev) {
        // remove .sliding class, to allow the next move
        $('.carousel-sync').removeClass('sliding');
    });


    $('.carousel').carousel({
        interval: 2000
    })
})(jQuery); // End of use strict