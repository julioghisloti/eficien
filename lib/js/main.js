$(function (){
	
	$('#bg-home').maximage();

	//Pegando width
	/*$(window).load(user_width);
	$(window).resize(user_width);

	function user_width() {
		var width = document.documentElement.clientWidth;
		if(width > 1000){
			$('#menu-all').show().css({'width':width + "px"});	
		}else{
			$('#menu-all').show().css({'width':1024 + "px"});
			$('#menu-all').show().css({'position':'absolute'});	
		}
	}
	*/


	//Calculando Height
	$(window).load(user_height);
	$(window).resize(user_height);

	var height = document.documentElement.clientHeight;
	$('.page').show().css({'height':height + "px"});	
	function user_height() {
		var height = document.documentElement.clientHeight;

		if(height > 650){
			$('.page').show().css({'height':height + "px"});	
		}else{

		}
	}

});