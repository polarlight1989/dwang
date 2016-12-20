$(function(){
 
	$(".icon_list").click(function(){
		var cc = 0;
		$(".il2").each(function(){
			cc++;
		});
		if(cc != 2) return;
		var ind = $(this).index();
		var tind;
		if(ind==0){
			tind=1;
		}else{
			tind=0;
		}
		$("#ih3").children().show();
		$(this).hide();
		$("#ih3").children().addClass('cur');
		$(this).removeClass('cur');
		$(".il2").hide(); 
		$(".il2").eq(tind).show();
	});
	//
	$(".itabPicList").children().bind('mouseenter',function(){
 
		$(this).find('.itwrap').fadeIn(100);
	});
	$(".itabPicList").children().bind('mouseleave',function(){
 
		$(this).find('.itwrap').fadeOut(100);
	});
	//菜单项
	$(".menu").bind('mouseenter',function(){
		$(".showbox").show();
		
	});
	$(".menu").bind('mouseleave',function(){
		$(".showbox").hide();
		$(".showbox2").hide();
		$(".showbox3").hide();
	});
	$(".showbox").children().bind('mouseenter',function(){
		$(".showbox2").hide();
		$(".showbox3").show();
		$("[sb2itemsp]").hide();
		$(".fg").hide();
		var ind = $(this).index();
		$(".showbox2").eq(ind).show();
	});
	$(".showbox").children().bind('mouseleave',function(){
		 
	});
	//focus
	function focusChange(){
		if($(".fbox").children().length == 1) return;
		var t = $(".fbox").find('.cur');
		var next = parseInt(t.index())+1;
	 
		if(next == ($(".fbox").children().length-1)) next = 0;
		$(t).fadeOut(function(){
			$(".fbox").children().removeClass('cur');
			$(".fbox").children().eq(next).fadeIn();
			$(".fbox").children().eq(next).addClass('cur');
		});
		
	}
	setInterval(function(){
		focusChange();
	},3000);
	//in3b
	$(".in3b").bind('mouseenter',function(){
		 
		$(this).find('.in3bzz').fadeIn(100);
	});
	$(".in3b").bind('mouseleave',function(){
		 
		$(this).find('.in3bzz').fadeOut(100);
	});
	$("[selectArea]").bind("change",function(){
		location.href = "/index.php/zh/catalog/45";
	});
	var start = 1000;
	$(".yyright").each(function(){
		$(this).css('zIndex',start--);
	});
	$(".yyright2").each(function(){
		$(this).css('zIndex',start--);
	});
});
function yyright(){
	$(".yyright").bind('mouseenter',function(){
		$(this).find('.itwrap').fadeIn(200);
	});
	$(".yyright").bind('mouseleave',function(){
		$(this).find('.itwrap').fadeOut(200);
	});
	$(".yyright").click(function(){
		$(this).find('.itwrap').find(".itwbtn").trigger('click');
	});
}















