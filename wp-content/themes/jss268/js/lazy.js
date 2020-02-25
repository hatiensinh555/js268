$(document).ready(function(){
		lazyLoad(1000,window.innerHeight, 1);

})
$(document).on('scroll touchmove',function(){
	lazyLoad(1000,window.innerHeight, 1);
});

/**
* animationDuration: int
* windowPosition: int
* opacityLevel: decimal
*/
function lazyLoad(animationDuration=300,windowPosition=0, opacityLevel=1){
	var currentScroll = $(window).scrollTop()+windowPosition;
	var lazyImages = $('img[data-awake="false"]');
	var lazyImage;
	for(var i = 0 ; i < lazyImages.length ; i++ ){
		lazyImage=lazyImages[i];
		if($(lazyImage).offset().top <= currentScroll){
			if($(lazyImage).attr('data-awake')=='false'){
				$(lazyImage).attr('src',$(lazyImage).attr('data-img-src'));
				$(lazyImage).attr('data-awake','true');
			 	$(lazyImage).fadeTo( animationDuration, opacityLevel );
			}
		}
	}
}