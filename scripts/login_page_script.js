$(document).ready(function(){
	$(".main_div_class_lgn_page").css("top",(($(window).height()-$(".main_div_class_lgn_page").height())/2));
	$("#new_usrs_reg_div_id").css("top",(($(window).height()-$("#new_usrs_reg_div_id").height())/2));
	$("#new_usrs_reg_div_id").css("left",(($(window).width()-$("#new_usrs_reg_div_id").width())/2));
	
	
	
	$(document).on('click','.singp_span_cls',function(){
		$('.main_div_class_lgn_page').animate({left:'-800px'},'fast');
		$('#new_usrs_reg_div_id').fadeIn(300);
	});
	
	$(document).on('click','#go_bck_span_id',function(){
		$('#new_usrs_reg_div_id').fadeOut(300);
		$('.main_div_class_lgn_page').animate({left:'0px'},'fast');
		
	});
	
	
	
	
	
	
	
	
	
	
	
	
});//end