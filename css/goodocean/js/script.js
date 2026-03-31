jQuery(function(){
  /*=======================================================
    ハンバーガーメニュークリック設定
  =======================================================*/
  var btnNav = '#btn-nav';
  jQuery(btnNav).on('click', function(){
    jQuery(this).toggleClass('is-open');
    jQuery('#gnav').toggleClass('is-open');
    bodyNoScroll();
  });

  var blnState = false,
      scrollPosition;
  function bodyNoScroll(){
    if (blnState == false){
      scrollPosition = jQuery(window).scrollTop();
      jQuery('body').addClass('is-noScroll').css({'top': - scrollPosition});
      blnState = true;
    }else{
      jQuery('body').removeClass('is-noScroll').css({'top': 0});
      window.scrollTo(0, scrollPosition);
      blnState = false;
    }
  }


  /*=======================================================
    ページ内リンクの設定（固定ヘッダーでアンカーリンクがずれる対策）
  =======================================================*/
  var headerHeight = jQuery('#header-nav').outerHeight(true),
      speed = 800,
      spWidth = window.matchMedia("(max-width: 1100px)").matches;

  jQuery('a[href*="#"]').on('click', function(){
    setAnchorLink(jQuery(this).attr('href'));
    return false;
  });

  function setAnchorLink(url){
    if (url.indexOf("#") != -1){
      let anchor = url.split("#"),
          target = jQuery('#' + anchor[anchor.length - 1]),
          position = Math.floor(target.offset().top) - headerHeight;
      jQuery('html, body').animate({ scrollTop: position }, speed);
    }
  }

  jQuery('#gnav a[href*="#"]').on('click', function(){
    if(spWidth){
      jQuery(btnNav).trigger('click');
    }
  });


  /*=======================================================
    アニメーション設定
  =======================================================*/
  jQuery('.js-fadeinup-trigger').on('inview', function(event, isInView){
    if (isInView){
      jQuery(this).addClass('animate__animated animate__fadeInUp');
    }
  });

  jQuery('.js-fadein-trigger').on('inview', function (event, isInView) {
    if (isInView) {
      jQuery(this).addClass('animate__animated animate__fadeIn');
    }
  });

});
