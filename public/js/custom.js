(function ($) {
    'use strict';
    jQuery('.mean-menu').meanmenu({ meanScreenWidth: "991" });
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 150) {
            $('.navbar-area').addClass("sticky-nav");
        } else {
            $('.navbar-area').removeClass("sticky-nav");
        }
    });
    $('.close-btn').on('click', function () {
        $('.search-overlay').fadeOut();
        $('.search-btn').show();
        $('.close-btn').removeClass('active');
    });
    $('.search-btn').on('click', function () {
        $(this).hide();
        $('.search-overlay').fadeIn();
        $('.close-btn').addClass('active');
    });
    $(".side-nav-responsive .dot-menu").on("click", function () {
        $(".side-nav-responsive .container .container").toggleClass("active");
    });
    $('.home-slider').owlCarousel({
        rewind: true,
        lazyLoad: true,
        margin: 30,
        items: 1,
        nav: true,
        dots: false,
        dotsData: true,
        autoplay: true,
        autoplayHoverPause: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    $('.service-slider').owlCarousel({
        rewind: true,
        lazyLoad: true,
        margin: 30,
        nav: true,
        dots: false,
        dotsData: true,
        autoplay: true,
        autoplayHoverPause: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            1000: { items: 3 }
        },
    });
    $('.testimonials-slider').owlCarousel({
        rewind: true,
        lazyLoad: true,
        margin: 30,
        items: 1,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
    });
    $('.team-slider').owlCarousel({
        rewind: true,
        lazyLoad: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            1000: { items: 3 }
        },
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    $('.project-slider').owlCarousel({
        rewind: true,
        lazyLoad: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            1000: { items: 3 }
        },
    });
    $('.project-details-slider').owlCarousel({
        rewind: true,
        lazyLoad: true,
        margin: 0,
        nav: true,
        items: 1,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    $('.brand-slider').owlCarousel({
        rewind: true,
        lazyLoad: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 2 },
            600: { items: 3 },
            768: { items: 4 },
            992: { items: 5 },
            1200: { items: 6 }
        },
    });
    $('select').niceSelect();
    $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.tab ul.tabs li a').on('click', function (g) {
        var tab = $(this).closest('.tab'), index = $(this).closest('li').index();
        tab.find('ul.tabs > li').removeClass('current');
        $(this).closest('li').addClass('current');
        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
        g.preventDefault();
    });
    $(document).on('click','.accordion-title', function () {
        $(this).toggleClass('active');
        $(this).next().slideToggle('fast');
        $('.accordion-content').not($(this).next()).slideUp('fast');
        $('.accordion-title').not($(this)).removeClass('active');
    });
    $('.input-counter').each(function () {
        var spinner = jQuery(this), input = spinner.find('input[type="text"]'),
            btnUp = spinner.find('.plus-btn'), btnDown = spinner.find('.minus-btn'), min = input.attr('min'), max = input.attr('max');
        btnUp.on('click', function () {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal); spinner.find("input").trigger("change");
        });
        btnDown.on('click', function () {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal); spinner.find("input").trigger("change");
        });
    });
    $('body').append('<div id="toTop" class="top-btn"><i class="fa fa-angle-double-up"></i></div>');
    $(window).on('scroll', function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').on('click', function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    new WOW().init();
    jQuery(window).on('load', function () {
        jQuery(".preloader").fadeOut(500);
    });
})(jQuery);