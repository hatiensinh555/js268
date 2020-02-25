$(function () {
   lazyLoad(2000, window.innerHeight, 1);
});


$(document).ready(function () {
   $('.banner').slick({
      autoplay : true,
      interval : 1000,
      fade : true
   });

   $('.blog-content').slick({
      dots: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 115000,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
         {
           breakpoint: 769,
           settings: {
             slidesToShow: 2,
             slidesToScroll: 2
           }
         },
         {
           breakpoint: 376,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
         }
       ]
   })

   $('.chat-left').hover(function() {
      $(this).parent().css('right','0');
      $('#isShowHideChat').click(function() {
         $(this).parent().css('right','-215px');
      })
   })
   ////////////////
   // var lastScroll = 0;
   // $(window).scroll(function () {
   //    // var nowScroll = $(this).scrollTop();
   //    // if (nowScroll < lastScroll && nowScroll != 0) {
   //       $('#goTop').addClass('goTop');
   //    // } else {
   //    //    $('#goTop').removeClass('goTop');
   //    // }
   //    // lastScroll = nowScroll;
   //  });

   // $('.breadcrumbCus a').click(function () {
   //    if($(this).hasClass('active-cl')) {
   //       $(this).css('margin-top','5px')
   //    }
   //    else {
   //       $(this).css('margin-top','0px');
   //    }
   // })


                var ch=100;
                $(window).scroll(function(){
                	var nScroll=$(this).scrollTop();
                	if(nScroll>ch){
                		$('#goTop').addClass('goTop');
                		$('#top-wrap').addClass('codinh');
                	}else{
                		$('#goTop').removeClass('goTop');
                		$('#top-wrap').removeClass('codinh');
                	}
                });

});
