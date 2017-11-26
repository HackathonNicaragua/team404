$(document).ready(function(){
	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();
		if(scroll > 470){
			if(!flag){
				$('.navbar').css({"background": "#032049"});	
				flag = true;
			}
		}else{
			if(flag){
				$(".navbar").css({"background": "transparent)"});
				flag = false;
			}
		}
	});		
});