//visual animation
$(function(){
	setTimeout(function(){
		$('.area_visual .visual_txt').addClass('active');
		$('.area_visual .visual_txt').children('span').css("transition","all 0.5s ease 0.2s").addClass("show");
		$('.area_visual .visual_txt').children('h2').css("transition","all 0.5s ease 0.4s").addClass("show");
		$('.area_visual .visual_txt').children('ul').css("transition","all 0.5s ease 0.6s").addClass("show");
		$('.area_visual .visual_txt').children('a').css("transition","all 0.5s ease 0.8s").addClass("show");
		$('.area_visual .visual_txt').children('img').css("transition","all 0.5s ease 1.0s").addClass("show");
	}, 200);  
});

/* mobile gnb */
$(function(){
	//mob gnb
	var gnbObj = $('#header .gnb').html();
	$('#header .m_gnb ul').html(gnbObj);
	$('a.btn_menu').on('click',function(){
		$(this).toggleClass('active');
		$('#header .m_gnb').toggleClass('active');
		$('body').addClass('active');
		return false;
	});
});


//scroll
$(window).scroll( function(){
	$('.scroll_up').each( function(i){		
		var bottom_of_object = $(this).offset().top + $(this).outerHeight()/3;
		var bottom_of_window = $(window).scrollTop() + $(window).height();
		
		if( bottom_of_window > bottom_of_object ){                
			$(this).addClass("active");	                    
		}else{
			$(this).removeClass('active');
		}		
	});  
});

//layout pop
$(function(){
   $('.popbox').append('<a href="#" class="btn_close">팝업닫기</a>');
   $('.btn_close').on('click',function(){
       $('.popbox').parent('div').fadeOut();       
       return false;
   });
   $(document).mouseup(function(e){
      var container = $('.popbox').parent('div'); 
      if(container.has(e.target).length == 0){
         container.fadeOut();         
      }
   });
});

//toggle
$(function toggle(){
   $('.graph button').click(function(){
       $('.hide_list').fadeIn();
	   $('.graph button').hide();
   });
});