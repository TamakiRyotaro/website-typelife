jQuery(function(){
  jQuery('.js-slider').slick({
    fade: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1500,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });

  jQuery('.js-slider').on('touchmove', function (event, slick, currentSlide, nextSlide) {
    jQuery('.js-slider').slick('slickPlay');
  });
});
