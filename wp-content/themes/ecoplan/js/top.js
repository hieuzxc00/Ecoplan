// DOCUMENT READY
jQuery(document).ready(function() {
    "use strict";
    var $ = jQuery.noConflict();
    //Show more
    // let btnMore = $('.show-more');

    // btnMore.on('click', function() {
    //     $('.intro__box').addClass('show');
    // });

});


// WINDOW LOAD
jQuery(window).bind('load', function() {
    "use strict";
    var $ = jQuery.noConflict();
    // CASE CAROUSEL
    if( $('.case__list').length > 0 ) {
        $('.case__list').slick({
            dots: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: true,
            centerMode: false,
            centerPadding: 0,
            pauseOnHover: false,
            fade: false,
            variableWidth: false,
            prevArrow: $('.case__navi-arrow.prev'),
            nextArrow: $('.case__navi-arrow.next'),
            responsive: [
                {
                  breakpoint: 751,
                  settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '150px',
                  }
                },
                {
                  breakpoint: 576,
                  settings: {
                    slidesToShow: 1,
                    centerMode: false,
                    centerPadding: 0,
                  }
                }
              ]
        });
    }
    /*============== END - CASE CAROUSEL ================*/

    // STRENGTH SLIDER
    if( $('.strength__img').length > 0 ) {
      $('.strength__img').slick({
          dots: false,
          infinite: false,
          speed: 100,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 5000,
          arrows: false,
          centerMode: false,
          centerPadding: 0,
          pauseOnHover: false,
          fade: false,
          variableWidth: false,
          responsive: [
            {
              breakpoint: 751,
              settings: {
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                speed: 400,
                dots: true,
                asNavFor: '.strength__list',
              }
            }
          ]
      });
    }

    if($(window).width() < 751 && $('.strength__list').length > 0 ) {
      $('.strength__list').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: false,
        speed: 400,
        responsive: [
          {
            breakpoint: 751,
            settings: {
              asNavFor: '.strength__img',
            }
          }
        ]
        
      });
    }

    $(".strength__list li").hover(
      function() {
        const hoverTimer = setTimeout(() => {
          let index = $(this).index();
          $('.strength__img').slick('slickGoTo', index);
          $(".strength__list li").removeClass("active");
          $(this).addClass("active");
      }, 100);
      }, function() {
          //mouse leave
      }
    );

    $('.strength__img').on('afterChange', function(event, slick, currentSlide){
        $(".strength__list li").removeClass("active");
        $(".strength__list li").eq(currentSlide).addClass("active");
    });

    /*============== END - STRENGTH SLIDER ================*/

    // CONTENT LOAD ANIMATION
    AOS.init({
        offset: 100,
        duration: 600,
        disable: 'mobile',
        once: true
    });
    /*============== END - CONTENT LOAD ANIMATION ================*/
});