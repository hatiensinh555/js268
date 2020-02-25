function scrollMouse(classFirst, nameClassAdd) {
   /*$(classFirst).addClass('hidden');*/
   $(classFirst).each(function () {
      var spaceTop = $(this).offset().top;
      var chieucao = $(this).height();
      var spaceBottom = $(document).height() - $(this).offset().top - chieucao;
      var scrollBottom = $(document).height() + $(window).height() - $(window).scrollTop();
      var scrollSpaceTop = $(window).scrollTop();
      if ((spaceBottom < scrollBottom - $(window).height()) && (spaceTop < scrollSpaceTop + $(window).height())) {
         $(this).addClass(nameClassAdd);
      }
      // else $(this).removeClass(nameClassAdd);
   });
}
/* zoomIn - run-right1 - zoomIn - slideRight - tuvana - zoomIn10 - slideLeft*/
var width = $(window).width();


if ($(window).width() > 768) {
   $(window).scroll(function () {
      scrollMouse('.game-wrap .game-content a', 'pause');
      scrollMouse('.guide-content .guide-item', 'pause');
      scrollMouse('.step-by-step .step-item ', 'pause');
      scrollMouse('.news-primary-pic', 'pause');
      scrollMouse('.news-item', 'pause');
      scrollMouse('.blog-item', 'pause');
   });
}
else {
   $(window).scroll(function () {
      // scrollMouse('.game-wrap .game-content a', 'slideUp');
      scrollMouse('.guide-content .guide-item', 'slideRight');
      scrollMouse('.step-by-step .step-item ', 'slideRight');
      scrollMouse('.welcome', 'slideRight');
      scrollMouse('.intro-content', 'slideUp');
      scrollMouse('.btn-blue', 'slideUp');
      scrollMouse('.news-primary-pic', 'slideLeft');
      scrollMouse('.news-primary-title', 'slideLeft');
      scrollMouse('.news-item', 'slideUp');
      scrollMouse('.blog-item', 'slideLeft');
   });
}