(function(){
    "use strict";
    var windowWidth = $(window).width(),
        is_chrome = navigator.userAgent.indexOf('Chrome') > -1,
        is_explorer = navigator.userAgent.indexOf('MSIE') > -1,
        is_firefox = navigator.userAgent.indexOf('Firefox') > -1,
        is_opera = navigator.userAgent.toLowerCase().indexOf("op") > -1;

    /* FIXING GLOBR MIS-POSITION */
    var theGlobe = $('#globe');
    if(is_chrome){
        $("body").addClass("chrome");
    }

    /* language dropdown */
    $('.hk_lang_dropdown').slideUp();
    $('.lang').on('mouseover',function(){
        $('.hk_lang_dropdown').stop().slideDown();
    });
    $('.lang').on('mouseleave',function(){
        $('.hk_lang_dropdown').stop().slideUp();
    });

    $('.hk_lang_dropdown a').on('click',function(){
        var currentText = $(this).text().slice(0,3);
        $('.lang .lng').text(currentText);
    });


    /* mobile menu */
    function mobileMenu(selector,dropdown){
        $(selector + '> a').on('click', function(){
            $(this).siblings(dropdown).slideToggle();
            $(dropdown).not($(this).siblings(dropdown)).slideUp();
            $('.hk_dropdwon').not($(this).siblings('.hk_dropdwon')).slideUp();
            $('.hk_megamenu').not($(this).siblings('.hk_megamenu')).slideUp();
        }).removeAttr('href');
    }
    if(windowWidth < 768){
        $('.hk_dropdwon, .hk_megamenu').hide();
        mobileMenu('.hk_has_dropdown','.hk_dropdwon');
        mobileMenu('.hk_has_mehgamenu', '.hk_megamenu');
    }

    /* Login modal js*/
    $('.login_modal_wrapper').hide();
    $('.hk_login_modal > a').on('click',function(){
        $('.login_modal_wrapper').fadeToggle(500);
    });

    /*hero area js*/
    $('.hk_single_pack_desc').hide();
    $('.hk_single_pack_desc.active').fadeIn(1000);
    function heroContent(currentItem){
        $('.hk_single_pack_desc').stop().hide();
        $('.'+currentItem).stop().fadeIn(1000);
    }
    $('.hk_header_single_service').on('click',function(){
        var activatingContent = $(this).data('hk-target');
        var packagePrice = $(this).data('hk-price')+'/';

        heroContent(activatingContent);
        $(this).addClass('active');
        $('.hk_header_single_service').not(this).removeClass('active');
        $('.hk_pack_price').text(packagePrice);
    });

    /* accordion jquery */
    $('.panel-title > a').on('click',function(){
        $(this).parents('.panel-heading').toggleClass('active');
        $('.panel-heading').not($(this).parents('.panel-heading')).removeClass('active');
        $(this).children('span.fa').toggleClass('fa-minus fa-plus');
        $('.panel-title span.fa').not($(this).children('span.fa')).removeClass('fa-minus').addClass('fa-plus');
    });

    /*select price jquery*/
    $('.hk_price_option').hide();
    $('.hk_price_select p').on('click',function(){
        $(this).siblings('.hk_price_option').slideToggle();
    });
    $('.hk_price_option li').on('click',function(){
        var elementInner = $(this).html();
        $(this).parent('.hk_price_option').siblings('p').html(elementInner);
        $(this).parent().slideUp(200);
    });

    /* cart btn js */
    var btnText = 'Add to Cart';
    $('.cart_btn').on('click',function(){
        $(this).toggleClass('active');
        btnText == $(this).text() ? $(this).text('Remove') : $(this).text(btnText);
    });

    /*========= all sliders js =========*/
    // hero slider
    var hero_slider = $('.hk_slider_contents');
    hero_slider.owlCarousel({
        items: 1,
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: true,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            991:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });


    /* TESTIMONIAL SLIDER */
    $('.hk_testimonial_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        dots: false,
        speed: 500,
        fade: true,
        arrows: false,
        asNavFor: '.hk_testimonial_slider_nav'
    });
    var check = windowWidth >= 480;

    $('.hk_testimonial_slider_nav').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.hk_testimonial_slider',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        vertical: check,
        prevArrow: '<i class="fa fa-angle-up"></i>',
        nextArrow: '<i class="fa fa-angle-down"></i>'
    });
    $('.hk_testimonial_slider2').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        dots: false,
        speed: 500,
        fade: true,
        prevArrow: '<i class="fa fa-angle-left"></i>',
        nextArrow: '<i class="fa fa-angle-right"></i>'
    });


    /* Organization client slider */
    $('.hk_clients_slider').owlCarousel({
        loop:true,
        margin: 125,
        nav: false,
        autoplay: true,
        dots: false,
        responsive:{
            0:{
                items:2
            },
            767:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    /* pricing table js*/
    var pricingTable = $('.hk_single_price_table');
    pricingTable.on('mouseover',function(){
        pricingTable.removeClass('active');
    });
    pricingTable.on('mouseleave',function(){
        $('.business').addClass('active');
    });


    // Replace all SVG images with inline SVG
    $('img.hk_svg').each(function(){
        var $img = $(this),
            imgID = $img.attr('id'),
            imgClass = $img.attr('class'),
            imgURL = $img.attr('src');

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = $(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass);
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });


    /* reveal animation on viewport */
    var $revealClass = $('.reveal');
    $revealClass.css({
        'animation-name': 'none',
        'visibility': 'hidden'
    });

    $revealClass.waypoint(function(direction) {
        var animationName = $(this).attr('data-reveal-anim'),
            animDelay = $(this).attr('data-anim-delay'),
            animDuration = $(this).attr('data-anim-duration');

        $(this).css({
            'animation-name': animationName,
            'data-anim-duration': animDuration,
            '-webkit-animation-delay': animDelay,
            '-moz-animation-delay': animDelay,
            'animation-delay': animDelay,
            'visibility': 'visible'
        });
    },{
        offset: '80%'
    });


    /* preloader js */
    $(window).load(function(){
        $('.preloader').fadeOut(1000);
        $('.preloader-bg').delay('500').fadeOut(1000);
    });

    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/57cabc981105e45f7b3ba9f7/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();


})(jQuery)