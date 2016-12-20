<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html ng-app='app'>
<head>
<link rel="stylesheet" href="/public/css/bootstrap.min.css">
<link rel="stylesheet" href="./public/css/style.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
$catalogsRelation = D('Catalogs')->getRelation(); ?>
<script type="text/javascript">
	var LANG = 'zh';

	var catalogs_tpl = '';
	var catalogsRelation = <?php echo json_encode($catalogsRelation);?>;
</script>
<script type="text/javascript" src='/public/js/angular.js'></script>
<script type="text/javascript" src='/public/js/angular-ui-router.min.js'></script>
<script type="text/javascript" src='./public/js/app.js'></script>
<script type="text/javascript" src='./public/js/controller.js'></script>
<script type="text/javascript" src='./public/js/jquery.js'></script>
<script type="text/javascript" src='./public/js/jquery.touchSlider.js'></script>
<script type="text/javascript" src='./public/js/common.js'></script>


</head>

<body>
<div class='topnav'>
	<div class='tnleft'>
		<a href=''>中文</a>
		|
		<a href=''>ENGLISH</a>

	</div>
	<a href='' id='logo' style='padding-top:.2rem;'><img src='./public/images/logo.png'/></a>
	<div class='tnright'> 
		<a href='javascript:;' class='icon_shx' style='position: absolute;right:.6rem;top:.02rem;'></a>
		<a href='javascript:;' class='icon_fdj' style='position: absolute;right:.1rem;top:.02rem;'></a>
	</div>
</div>
<div class="main_visual">
	<div class="flicking_con">
		<a href="#">1</a>
		<a href="#">2</a>
		<a href="#">3</a>
		<a href="#">4</a>
		<a href="#">5</a>
	</div>
	<div class="main_image">
		<ul>
			<li><span style="background-image:url('./public/temp/focus1.png');background-size:6.4rem 3.4rem; "></span></li> 
			<li><span style="background-image:url('./public/temp/focus1.png');background-size:6.4rem 3.4rem; "></span></li> 
			<li><span style="background-image:url('./public/temp/focus1.png');background-size:6.4rem 3.4rem; "></span></li> 
			<li><span style="background-image:url('./public/temp/focus1.png');background-size:6.4rem 3.4rem; "></span></li> 
		</ul> 
	</div>
</div>
 
<div ui-view class="fade-in-up"> </div> 

<div class='footer'>
	<div class='f1'>
		<div class='f1c'>
			<a href="" id="logo"><img src="./public/images/logo.png"></a>
		</div>
		<div class='f1c2'>
			<div class='col-xs-4'>
				<a href=''>Delhi Metro<br/>phase three</a>
			</div>
			<div class='col-xs-4' style='text-align: center;'>
				<i  ></i><a href='' style='left:.4rem;'>Delhi Metro<br/>phase three</a>
			</div>
			<div class='col-xs-4'>
				<i style='background-image: url("/public/images/icon_target.png");width:.42rem;height: .42rem'></i><a href='' style='left:.5rem;'>Delhi Metro<br/>phase three</a>
			</div>
		</div>
	</div>
	<div class='f2'>
		<div class='w550'>
			<p class='f2t'><span style='color:#1dccaa;'>Home</span> :: Destination :: Criuses :: Specils :: Hilidays :: Blog :: Contact Us</p>
			<p class='f3t'>Copyright @ voyage. All Right Reserved</p>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){

	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
	},function(){
		$("#btn_prev,#btn_next").fadeOut()
	});
	
	$dragBln = false;
	
	$(".main_image").touchSlider({
		flexible : true,
		speed : 200,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e){
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	});
	
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	});
	
	$(".main_image a").click(function(){
		if($dragBln) {
			return false;
		}
	});
	
	timer = setInterval(function(){
		$("#btn_next").click();
	}, 5000);
	
	$(".main_visual").hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		},5000);
	});
	
	$(".main_image").bind("touchstart",function(){
		clearInterval(timer);
	}).bind("touchend", function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		}, 5000);
	});
	
});
</script>
</body>
</html>