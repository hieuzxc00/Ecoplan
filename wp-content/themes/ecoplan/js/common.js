// WINDOW LOAD
jQuery(window).bind('load', function () {
    "use strict";
    var $ = jQuery.noConflict();

    // ANCHOR LINK
    function anchorLink(el) {
        var p = $(el).offset();
        var offset_PC = 125;
        var offset_SP = 70;
        if ($(window).width() > 750) {
            $('html,body').animate({ scrollTop: p.top - offset_PC }, 400);
        } else {
            $('html,body').animate({ scrollTop: p.top - offset_SP }, 400);
        }
    }

    // ANCHOR FROM OTHER PAGE
    var hash = location.hash;
    if (hash && $(hash).length > 0) {
        anchorLink(hash);
    }

    // ANCHOR IN PAGE
    $('a[href^="#"]').click(function () {
        var get_ID = $(this).attr('href');
        if ($(get_ID).length) {
            anchorLink(get_ID);
            // CLOSE SP NAV
            if ($('body').hasClass('open-nav')) {
                $('#menu-toggle').trigger('click');
            }
            return false;
        }
    });
    // =========== END - ANCHOR LINK ============

    // LAZY LOAD RESOURCE
    $('[data-href]').each(function () {
        var _this = $(this);
        var href = $(this).data('href');
        setTimeout(function () {
            _this.attr('href', href);
        }, 3000);
    });
    $('[data-src]').each(function () {
        var _this = $(this);
        var src = $(this).data('src');
        setTimeout(function () {
            _this.attr('src', src);
        }, 3000);
    });
    // =========== END - LAZY LOAD RESOURCE ============


});



// WINDOW LOAD/SCROLL
jQuery(window).bind('load scroll', function () {
    var $ = jQuery.noConflict();
    // TO-TOP
    if ($(this).scrollTop() >= 500) {
        $('.to-top').addClass('show');
    } else {
        $('.to-top').removeClass('show');
        }
    // =========== END - TO-TOP ============
});



// DOCUMENT READY
jQuery(document).ready(function () {
    "use strict";
    var $ = jQuery.noConflict();
    // MENU TOGGLE SP
    $('#menu-toggle').click(function () {
        $(this).toggleClass('open');
        $('body').toggleClass('open-nav');
    });
    $(document).on('mousedown touchstart', function (e) {
        if ($(e.target).closest(".nav, #menu-toggle").length === 0) {
            if ($('body').hasClass('open-nav')) {
                $('#menu-toggle').trigger('click');
            }
        }
    });
    // =========== END - MENU TOGGLE SP ============

    // SUB NAV SP SLIDE TOGGLE
    $('.nav .nav__menu-item.has-sub>span').click(function () {
        var screenWidth = $(window).width();
        if (screenWidth <= 750) {
            $(this).toggleClass('open');
            $(this).next().stop().slideToggle(200);
        }
    });
    // =========== END - SUB NAV SP SLIDE TOGGLE ============



    // CHANGE TAB
    $('[data-tab]').click(function () {
        var group = $(this).data('tab-group');
        var index = $(this).data('tab');
        $('[data-tab][data-tab-group="' + group + '"].active').removeClass('active');
        $(this).addClass('active');

        $('[data-tab-content][data-tab-group="' + group + '"].active').removeClass('active');
        $('[data-tab-content="' + index + '"][data-tab-group="' + group + '"]').addClass('active');
    });
    // =========== END - CHANGE TAB ============


    // ACCORDION
    $(".accordion-button").click(function (e) {
        e.preventDefault();
        $(this).toggleClass("open");
        var accordion_ID = $(this).attr('id');
        var accordion_content = $('[data-accordion-for="' + accordion_ID + '"]');
        accordion_content.stop().slideToggle(200);
    });
    // =========== END - ACCORDION ============

    //FIXED HEADER
    let header = document.querySelector('header');
    let heightHeader = header.clientHeight;

    function stickyNav() {
        let scrollY = window.pageYOffset;
        if (scrollY > heightHeader) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    }



    //Fixed Contact Button
    let fixedBtn = $('.fixed__btn');
    let wrapper = $('#wrapper');

    function setHeight() {
        wrapper.css(
            'margin-bottom', fixedBtn.outerHeight(true) + 'px'
        );
    }

    function removeHeight() {
        wrapper.css(
            'margin-bottom', '0'
        );
    }

    if ($(window).width() < 751) {
        setHeight();
    } else {
        removeHeight()
    }

    $(window).resize(function () {
        if ($(window).width() < 751) {
            setHeight();
        } else {
            removeHeight();
        }
    });

    function showBtn() {
        let scrollY = window.pageYOffset;
        if (scrollY > heightHeader + 50) {
            fixedBtn.addClass('show');
        } else {
            fixedBtn.removeClass('show');
        }
    }

    document.addEventListener('scroll', function () {
        stickyNav();
        showBtn();
    });

    //under

    $('p:empty').remove();

    $('.ucase-slider-bg ul').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        draggable: false,
        asNavFor: '.ucase-slider-sm ul'
    });
    $('.ucase-slider-sm ul').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.ucase-slider-bg ul',
        dots: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 751,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 426,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });


    // SCROLL TO MAIL FORM
    if ($(".mw_wp_form").length) {
        function scrollToMailForm() {
            var _mailFormPos = $("#form_fmail").offset().top;
            _mailFormPos = parseInt(_mailFormPos);
            if ($(window).width() > 750) {
                $("html,body").animate({ scrollTop: _mailFormPos - 125 }, 400);
            } else {
                $("html,body").animate({ scrollTop: _mailFormPos - 70 }, 400);
            }
        }
        $(window).load(function () {
            // if ( localStorage.getItem("isSecondStep") === "true" && $(".mw_wp_form_input").length) {
            //     scrollToMailForm();
            // }
            // if ($(".mw_wp_form_confirm").length) {
            //     localStorage.setItem("isSecondStep", true);
            // } else {
            //     localStorage.setItem("isSecondStep", false);
            // }
            if (
                $(".mw_wp_form_confirm").length ||
                $(".mw_wp_form_complete").length ||
                $(".mw_wp_form_input .error").length
            ) {
                scrollToMailForm();
            }
        });
    }
    // =========== END - SCROLL TO MAIL FORM ============

    // Post Code
    if ($(".postcode").length > 0) {
        $(".postcode").click(function () {
            AjaxZip3.zip2addr(
                $('[name="post_code"]')[0],
                "",
                "address",
                "city",
                "apartment",
            );
        });
    }

    if ($("#mw_wp_form_confirm")) {
        var ipt_type = $('.mailform input').attr('type');
        if (ipt_type == 'hidden') {
            $(".mailform input[value='']").parents('p').addClass('f-none');
        }
    }

    // posttype
    if ($(".ucolumn-detail").length > 0) {
        $('.ucolumn-detail .ucolumn-desc ul').addClass('ulist ucheck1 mb15');
    }

    if ($(".ucase-detail-desc").length > 0) {
        $('.ucase-detail .ucase-detail-desc ul').addClass('ulist ucheck1 mb15');
    }

    if ($('.main-under')) {
        $('.main-under section').attr('data-aos', 'fade-up');

        // CONTENT LOAD ANIMATION
        AOS.init({
            offset: 200,
            duration: 600,
            disable: 'mobile',
            once: true
        });
    }
});