$(document).ready(function(){
  $(this).scrollTop(0);
  var window_s = $(window).scrollTop();
  enableBackToTop();
  enableMobileNav();
  $(window).scroll(function () {
    if ((($(window).scrollTop()) > 50)) {
      $('.header_mainpage').addClass('header-fix');
    } else {
      $('.header_mainpage').removeClass('header-fix');
    }
  });
  /******************slider******************/
  var swiper1 = new Swiper('#swiper01', {
    effect: 'slide', //  "slide", "fade", "cube", "coverflow" or "flip"
    direction: 'horizontal',// horizontal, vertical
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 0,
    autoplay: 0,
    speed: 900,
    initialSlide: 0,
    preloadImages: false,
    lazyLoading: true,
    autoplayDisableOnInteraction: false,
    mousewheelControl: false,
    watchSlidesProgress: false,
    paginationClickable: true,
    grabCursor:true,
    keyboardControl: false,
    paginationType: 'bullets', // "bullets", "fraction", "progress" or "custom"
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    autoHeight: false,
    hashnav: false,
    onSlideChangeEnd: function(swiper){},
    // Responsive breakpoints
    breakpoints: {
      360: {
        slidesPerView: 1,
        slidesPerGroup: 1,
      },
      767: {
        slidesPerView: 1,
        slidesPerGroup: 1,
      },
      991: {
        slidesPerView: 1,
        slidesPerGroup: 1,
      }
    }
  });


  var swiper2 = new Swiper('#swiper02', {
    effect: 'slide', //  "slide", "fade", "cube", "coverflow" or "flip"
    direction: 'horizontal',// horizontal, vertical
    slidesPerView: 3,
    slidesPerGroup: 1,
    spaceBetween: 40,
    autoplay: 0,
    speed: 900,
    initialSlide: 0,
    preloadImages: false,
    lazyLoading: true,
    autoplayDisableOnInteraction: false,
    mousewheelControl: false,
    watchSlidesProgress: false,
    paginationClickable: true,
    grabCursor:true,
    keyboardControl: false,
    paginationType: 'bullets', // "bullets", "fraction", "progress" or "custom"
    pagination: '.swiper-pagination02',
    nextButton: '.swiper-button-next02',
    prevButton: '.swiper-button-prev02',
    autoHeight: false,
    hashnav: false,
    onSlideChangeEnd: function(swiper){},
    // Responsive breakpoints
    breakpoints: {
      500: {
        slidesPerView: 1,
        slidesPerGroup: 1,
      },
      576: {
        slidesPerView: 1,
        slidesPerGroup: 1,
      },
      767: {
        slidesPerView: 2,
        slidesPerGroup: 1,
      },
      991: {
        slidesPerView: 2,
        slidesPerGroup: 1,
      }
    }
  });


  var swiper3 = new Swiper('#swiper03', {
    effect: 'slide', //  "slide", "fade", "cube", "coverflow" or "flip"
    direction: 'horizontal',// horizontal, vertical
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 0,
    autoplay: 0,
    speed: 900,
    initialSlide: 0,
    preloadImages: false,
    lazyLoading: true,
    autoplayDisableOnInteraction: false,
    mousewheelControl: false,
    watchSlidesProgress: false,
    paginationClickable: true,
    grabCursor:true,
    keyboardControl: false,
    paginationType: 'bullets', // "bullets", "fraction", "progress" or "custom"
    pagination: '.swiper-pagination03',
    nextButton: '.swiper-button-next03',
    prevButton: '.swiper-button-prev03',
    autoHeight: false,
    hashnav: false,
    onSlideChangeEnd: function(swiper){},
    // Responsive breakpoints
    breakpoints: {
      500: {
        slidesPerView: 1,
        slidesPerGroup: 1,
      },
      767: {
        slidesPerView: 1,
        slidesPerGroup: 1,
      },
      991: {
        slidesPerView: 1,
        slidesPerGroup: 1,
      }
    }
  });


});
/* Back To Top Button */
function enableBackToTop(){
  $('#button-to-top').hide();
  $(window).scroll(function(){

    if((($(window).scrollTop() )> 100)){
      $('#button-to-top').fadeIn(300);
    }else{
      $('#button-to-top').fadeOut(300);
    }
  });
  $('#button-to-top').click(function(e){
    e.preventDefault();
    $('body,html').animate({scrollTop:0}, 600);
  });
}
/**********Mobile Navigation *****************/
function enableMobileNav() {
  $('#menu-button').click(function () {
    $('.close-s-m').toggleClass('open-s-m');
    $('#navigation').toggleClass('navigation-opened');
  });
  $('#navigation li').each(function () { if ($(this).find('ul').length > 0) { $(this).append('<div class="dropdown-button"></div>'); } });
  $('#navigation .dropdown-button').click(function () { $(this).parent().toggleClass('dropdown-opened'); });
}
