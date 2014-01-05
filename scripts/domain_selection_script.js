$(document).ready(function(){
	var domains = [];
	domains.push(".com");
	
	$('#search_div_id').mouseenter(function(){
		$('#search_icon_img_id').attr('src','images/search_icon_white.png');
	});
	
	$('#search_div_id').mouseleave(function(){
		$('#search_icon_img_id').attr('src','images/search_icon.png');
	});
	
	$(document).click(function(e) {
		if ($(e.target).parents('.extension_div_class').length === 0) {
			$(".dom_select").css({display:'none'});
		}
	});
	
	$(document).on('click','.extension_div_class',function(){
		$('.dom_select').css('display','inline');
		//$('#com').attr('checked','true');
	});
	
	//onclick of select all chkbox
	$(document).on('click','.all_select',function(){
		if($('#select_all_id').attr('checked'))
		{
			$('.sel_dom').attr('checked','true');
			$('#dom_name_cls_Inp_id').html('All');
			$('#error_msg_div_id').css('display','none');
			domains=[];
			domains = ['.com','.net','.org','.biz','.in','.pw','.com.in','.me','.asia','.co','.info','.name','.mobi','.tv','.ws','.bz','.cc','.net.in','.org.in'];
			//alert(JSON.stringify(domains));
		}else
		{
			$('.sel_dom').removeAttr('checked');
			$('#com').attr('checked','true');
			$('#dom_name_cls_Inp_id').html('.com');
			domains=[];
			domains.push('.com');
		}
	});
	
	//on click of other chckboxes
	$(document).on('click','.sel_dom',function(){
		var dom_name;
		dom_name = $(this).attr('value');
		
		
		 if($(this).attr('checked'))
		{
			domains.push(dom_name);
		}else{
			if($.inArray(dom_name,domains)>-1)
			{
				domains.splice($.inArray(dom_name,domains),1);
			}else{
			
			}
			
			if($('#select_all_id').attr('checked'))//check if select all is checked
			{
				$('#select_all_id').removeAttr('checked');
			}
		}
		
		//alert(JSON.stringify(domains));
		
		if(domains.length > 1)
		{
			$('#dom_name_cls_Inp_id').html('custom');
			$('#error_msg_div_id').html('').css('display','none');
		}else if(domains.length == 1)
		{
			$('#dom_name_cls_Inp_id').html(domains[0]);
			$('#error_msg_div_id').html('').css('display','none');
		}else
		{
			$('#dom_name_cls_Inp_id').html('none');
			$('#error_msg_div_id').html('Please select atleast one domain extension!').fadeIn(300);
		}
		
		
		
	}); 
	
	
	/////////////////////////////////////////////////////////home script starts/////////////////////////////////////////////////////////
	$('#search_div_id').mouseenter(function(){
		$('#search_icon_img_id').attr('src','images/search_icon_white.png');
	});
	
	$('#search_div_id').mouseleave(function(){
		$('#search_icon_img_id').attr('src','images/search_icon.png');
	});
	
	$('.get_serv_div_class').mouseenter(function(){
		//alert(123);
		if($(this).find('.orange_bar_class').is(':animated'))
		{
			$(this).find('.orange_bar_class').stop();
		}
		$(this).find('.orange_bar_class').animate({width:"240px"});
		$(this).find('.sub_serv_desc_main_div_class').fadeIn(300);
	});
	
	$('.get_serv_div_class').mouseleave(function(){
		if($(this).find('.orange_bar_class').is(':animated'))
		{
			$(this).find('.orange_bar_class').stop();
		}
		$(this).find('.orange_bar_class').animate({width:"15px"});
		$(this).find('.sub_serv_desc_main_div_class').fadeOut(300);
	});
	
	//light box close button script
	$(document).on('click','.light_box_close_btn_img_tag_cls',function(){
		//$('.light_box_content_div_class').empty();
		$('.home_page_light_box_class').css('display','none');
	});
	
	
	
	//on click of view all services
	$(document).on('click','.view_all_serv_span',function(){
		//load content
		$('.home_page_light_box_class').fadeIn(300);
	});
	
	
	//on click of  about
	$(document).on('click','#about_bg',function(){
		//load content
		$('.home_page_light_box_class').fadeIn(300);
	});
	
	
	//on click of  whybg
	$(document).on('click','#why_bg',function(){
		//load content
		$('.home_page_light_box_class').fadeIn(300);
	});
	
	
	////////////////////////////////////////////////////////home script ends//////////////////////////////////////////////////////////










	
});//end