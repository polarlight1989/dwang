<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/public/css/style.css" rel="stylesheet">
	<link href="/public/css/<?php echo ($LANG); ?>.css" rel="stylesheet">
    <script src="/public/js/jquery.js"></script>
	<script src="/public/js/common.js"></script>
    <style>
    .job-hot {
    	position: absolute;
    	color: #d9534f;
    	right: 0;
    	top: 15px;
    }
    </style>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <?php
 $cataTree = D("Catalogs")->tree(array('setlang'=>LANG)); ?>
<script>
var LANG = '<?=C("LANG")?>';
var cataTree = <?=json_encode($cataTree)?>;
console.log(cataTree);
var caid0 = <?=$topcatalogid?$topcatalogid:0?>;
var caid1 = 0;
var caid2 = 0;
cataTree[0]= {son:{}};
 
function createCT1(catalogid){
	var cataDom = $("[catalogid="+catalogid+"]");
	$(".thson").show();
	$("#thson2").hide();
	var cata1 = cataTree[catalogid]['son'] ? cataTree[catalogid]['son'] : null;

	var html = "";
	var row = 0;
	for(var i in cata1){
		row++;
		var v = cata1[i];
		var href = "";
		href = '/index.php/'+LANG+'/catalog/'+v.id;
		html += "<div catalogid0='"+v.pid+"' catalogid1='"+v.id+"' catalogid='"+v.id+"' ct1><a href='"+href+"'>"+v.title+"</a></div>";
	}

	$("#thson").html(html);
	//绑定
	$("[ct1]").bind('mouseenter',function(){
		createCT2($(this).attr('catalogid0'),$(this).attr('catalogid1'));
	});
	//确定X坐标
	var left = cataDom.offset().left - cataDom.parent().parent().offset().left;
	var childnum = 5 - cataDom.index();
	var plusleft = 0;
	if(childnum - row < 0) plusleft = (row-childnum)*140;
	$("#thson").css('left',left-plusleft);
	$("[catalogid="+catalogid+"]").addClass('cur');
	$(".thn").removeClass('cur');
	$(cataDom).addClass('cur');
}
function createCT2(caid1,caid2){ 
	$("#thson2").show();
	var pcataDom = $("[catalogid="+caid2+"]");

	pcataDom.parent().children().removeClass('cur1');
	pcataDom.addClass('cur1');
	var catas = cataTree[caid1]['son'][caid2]['son'];
	var html = '';
	if(jsonLength(catas)){
		pcataDom.find('a').attr('href','javascript:;');
		var row = 0;
		for(var i in catas){
			row++;
			var v = catas[i];
			html += "<div catalogid0='"+v.pid+"' catalogid1='"+v.id+"'  catalogid='"+v.id+"' ct2 ><a href=''>"+v.title+"</a></div>";
		}
		var left = pcataDom.offset().left - pcataDom.parent().parent().offset().left;
		var plusleft = 0;
		$("#thson2").css('left',left-plusleft);
	} 
	$("#thson2").html(html);
	$("[ct2]").bind('mouseenter',function(){
		$("[ct2]").removeClass('cur2');
		 
		$(this).addClass('cur2');
	});
	$(".thn2").removeClass('cur');
	
}
function jsonLength(json){
	var row = 0;
	for(var i in json) row++;
	return row;
}
$(function(){
	$("[catalogid='"+caid0+"']").addClass('cur');
	//createCT1(3);
	//createCT2(3,4);
 	$("[ct0]").bind('mouseenter',function(){

 		createCT1($(this).attr('catalogid'));
 	});
 	$(".topheader").bind('mouseleave',function(){
 		$("#thson").hide();
 		$("#thson2").hide();
 	});

 	$(document).bind('scroll',function(){
 		 var st = $(this).scrollTop();
 		 if(st >= 395){
 		 	if($(".topheader").attr('isshow') == 0 ){
 		 		$(".topheader").attr('isshow',1);
 		 		$(".topheader").css('top',-70);
 		 		$(".topheader").show();
 		 		$(".topheader").animate({'top':0},300);
 		 	}
 		 	
 		 }
 		 if(st <= 395){
 		 	if($(".topheader").attr('isshow') == 1 ){
 		 		$(".topheader").attr('isshow',0);
 		 		$(".topheader").css('top',0);
 		 		
 		 		$(".topheader").animate({'top':-70},300,function(){
 		 			$(".topheader").hide();
 		 		});
 		 	}
 		 }

 	});
});
</script>
  	<div class='topheader' isshow=0>
  		<div class='w1280'>
  			<div class='small_logo'>
  			</div>
  			<div class='th_nav'>
  				<div class='thn' catalogid='0' ct0>
  					<a href='/<?php echo ($LANG); ?>'><?php echo lang('indexname');?></a>
  					
  				</div>
  				<?php
foreach($cataTree as $v){ ?>
  				<div class='thn' ct0 catalogid='<?php echo ($v["id"]); ?>'>
  					<a href='' ><?php echo ($v["title"]); ?></a>
  				</div>
  				<?php } ?>
  			</div>
  			<div class='thson' id='thson'>
  			</div>
  			<div class='thson2' id='thson2'>
  			</div>
  		</div>

  	</div>
	<div class='main row m1'>
		<div class='col-md-6 m1l'>
			<a href='' class='logo'><img src='/public/images/logo.png' width="322px" height="73px"/></a>
		</div>
		<div class='col-md-6 mtr1'>
			<div class='mtr1in'>
				 <a href='javascript:void(0);' style='padding:0px 20px 0px 10px;'>Contact Us</a> <a href='<?php echo url("zh");?>' >中文</a>  <span style='color:#FFFFFF;margin:0px 10px;'>|</span> <a href='<?php echo url("en");?>'>ENGLISH</a>
			</div>
			
		</div>
		
		<div class='col-md-6 mtr2  '>
			<div class='menu'>
				<div class='showbox'>
					<a href="/index.php/<?php echo C('LANG');?>"><i></i>
						<?=C('LANG')=='zh'?'首页':'Welcome'?>
					</a>
					<?php
 foreach($cataTree as $v){ $v['title'] = C('LANG') == 'zh' ? $v['title'] : $v[C('LANG').'title']; ?>
					<a href='javascript:void(0)'><i></i><?php echo ($v["title"]); ?></a>
					<?php } ?>
					 
				</div>
				<div class='showbox3'>
				</div>
				<div class='showbox2'>
					 
				</div>
				<script>
				$(function(){
					$("[sb2items]").hide();
					$("[sb2items]").parent().children(0).show();
					$(".showbox2").each(function(){
	 
					});
					$("[hasson]").bind('click',function(){
						var ind = $(this).attr('row');
						$("[sb2itemsp]").show();
						console.log(ind);
						$(".fg").show();
						$(this).parent().next().next().children().hide();
						$(this).parent().next().next().children().eq(ind).show();
					});
				})
				</script>
				<?php
 foreach($cataTree as $cata1){ ?>
				<div class='showbox2'>
					
					<div style='width:180px;float:left;'>
					<?php
 $row = 0; $cata2 = array(); if($cata1['son']) foreach($cata1['son'] as $v){ $cata2 = $v['son']; $v['title'] = C('LANG') == 'zh' ? $v['title'] : $v[C('LANG').'title']; ?>
						<a <?=$v['son']?'hasson':''?> row='<?=$row?>' href='<?=$v['son']?' javascript:void(0);':catalogHref($v['id'])?>'><?php echo ($v["title"]); ?></a><?=$row%2==1?'<br/>':''?> 
						<?php $row++;} ?>
					</div>
					<a href='' class='fg'></a>
					<div style='width:100px;float:left;' sb2itemsp>
						
					<?php
 if($cata1['son']) foreach($cata1['son'] as $v){ ?>
						<div  sb2items>
						<?php
 $row2 = 0; if($v['son']) foreach($v['son'] as $vv){ ?>
							<?php echo catalogA($vv[id]);?>
							<?=$row2++%2?'<br/>':''?>
							<?php } ?>
						</div>
						<?php } ?>
						
					</div>
				</div>
				<?php } ?>
				 
			</div>
			<div class='inputtxt'>
				<input type='text' />
			</div>
			<a href="" class='fdj'></a>
		</div>
	</div>
	<?php
 $banner = D('Config')->show("banner_".$topcatalogid); ?>
 
	<?php if($banner): ?><div class='main focus'  >
		<div class='fbox'>
			<li class='cur'>
				<img src="<?php echo ($banner); ?>" width="1280px" height="427px"/>
			</li>
		</div>
	</div><?php endif; ?>
	 
	<div class='main row' style='margin-top:88px;'>
		<span class='teltab'>
	&nbsp;&nbsp; <?=D('Config')->show('tel')?>
</span>
<!-- 头部 -->
<div class='itabHeader' style='background-color:#d7d7d7;'>
	<div class='col-md-3 ih1' style='width:200px;'>
				<?php
 $p = D('Catalogs')->WHERE(array('id'=>$catalog['pid']))->find(); $p['title'] = C('LANG')=='zh'?$p['title']:$p[C('LANG').'title']; echo $p['title']; ?>
			</div>

	 
			
			<?php  if($catalog['level'] == 2){ $catas = D('Catalogs')->WHERE("  pid = $catalog[pid]")->select(); if($catas) foreach($catas as $v) { ?>
			<div class='col-md-3 ih2 '  style='text-align:center;;width:120px;background-color: <?=$catalog['id']==$v['id']?'':'#cdcdcd'?>'>
				<a href='<?php echo ($v["id"]); ?>' style='color:#FFFFFF;'><?php echo ($v["title"]); ?></a> 
			</div>
			<?php } }else{ ?>
			<div class='col-md-3 ih2' style='text-align:center;;width:120px;'>
				<?php echo ($catalog["title"]); ?>
			</div>
			<?php
 } if($iTabChange){ ?>
			<div class="col-md-6 ih3" id="ih3" style="width:936px;">
				 <a href="javascript:void(0)"  class="icon_list cur"><img src="/public/images/icon_listtxt.png"></a>
				 <a href="javascript:void(0)" class="icon_list  "><img src="/public/images/icon_listpic.png"></a>
			</div>
			<?php } ?>
			<div class='floatMap' style='right:<?=$iTabChange?'70':'5'?>px;'>
				<a href='' class='fMap'></a>
				<a href="" class='fTxt'><?=getLang('We Are In The World')?></a>
				<span href="" class="fSel"><select style='padding:3px;' selectArea><option   value='1' selected><?php echo getLang('SELECTION REGION');?></option><?php echo getAreaOptions();?></select></span>
			</div>
		</div>
		<div style='clear:both;'></div>
		<!--图片列表-->
		<?php
 $years = D('Dongtai')->field("year")->WHERE("year > 0")->GROUP("year")->ORDER("year ASC")->SELECT(); $yearHtmls = array(); if($years){ foreach($years as $v){ $yearHtmls[] = '<a year="'.$v['year'].'" href="javascript:void(0);" ><i></i><span>'.$v['year'].'</span></a>'; } $yearHtml = implode('',$yearHtmls); } ?>
		<div class="itabTxtList il2" style="background-color:#f5f5f5;overflow:hidden;padding:80px 0px;">
			<div class="dongtaiCon">
				<h2><?php echo ($catalog[title]); ?></h2>
				<div class="clockLine">
					<?php echo ($yearHtml); ?>
				</div>
			</div>
			<div class='dtDetail' style='display:none'>
				<div class='dtdTitle'><span id='ny'></span>年大事记</div>
				<ul class='dtdul'>
				<?php
 $row=0; $arcs = D('Dongtai')->field('cdate,title,intro,id,year')->SELECT(); if($arcs) foreach($arcs as $v){ ?>
					<li yearitem='<?php echo ($v["year"]); ?>'  class='yyright2'>
						<a href='<?php echo arcHref($v["id"],39);?>'>
							<span class='ddatetime'><?=date("m/d",$v['cdate'])?></span>
							<div class='dintro'><?php echo ($v["title"]); ?></div>
							<div class='dintro2'><?php echo ($v["intro"]); ?></div>
							<span href='' class='dbtn22'>阅读更多</span>
						</a> 
					</li>
				<?php } ?>
				</ul>
			</div>
		</div>
 </div> 
 <script>
 function initaClock(){
	var len = $("[year]").length;
	//设置4个clock
	var jg = Math.ceil(len / 4);
 
	var c1 = 0;
	var c2 = c1+jg;
	var c3 = c2+jg;
	var c4 = len-1;
	$("[year]").removeClass('clocka');
	$("[year]").eq(c1).addClass('clocka');
	$("[year]").eq(c2).addClass('clocka');
	$("[year]").eq(c3).addClass('clocka');
	$("[year]").eq(c4).addClass('clocka');
	var w = 0;
	var bw = 86 * 4;
	var iw = (len - 4 ) *8;
	var sy = parseInt($(".clockLine").width()) - bw - iw;
	var mr = parseInt(sy / (len-1));
	$("[year]").css('marginRight',mr);
	$("[year]").last().css('marginRight',0);
 
}
$(function(){
	initaClock();
});
len -= 2; </script>
 <style>
 .dtdul li:hover{
	background-color:#124f90;
 }
.dbtn22{
	padding:0px;
	width:94px;
	height:36px;
	text-align:center;
	line-height:36px;
	background-color:#62abf6;
	color:#FFFFFF;
	border-radius:3px;
	margin-left:20px;
	display:block;
}
.dtdul a{
	padding:26px 20px;
	display:block;
}
 .dintro2{
	color:#FFFFFF;
	line-height:22px;
	padding:10px 0px;
	padding-right:10px;
	font-size:12px;
 }
 .dtdul .dintro{
	width:180px;
	line-height:24px;
	color:#FFFFFF;
	border-bottom:1px solid #c08326;
	padding-bottom:10px;
 }
 .ddatetime{
	height:32px;
	color:#FFFFFF;
	font-size:32px;
	font-family:'微软雅黑';
 }
 .dtDetail{
	padding:42px;
 }
 .dtdTitle{
	font-size:38px;
	font-weight:800;
	color:#62abf6;
	font-size:28px;
	font-family:'微软雅黑';
	
	height:84px;
	line-height:84px;
	 
	border-bottom:3px solid #124f90;
	
 }
  .dtdTitle span{
	font-size:44px;
	
  }
  .dtdul{
	width:1196px;
	padding:0px;
	
  }
.dtdul li{
 
	margin:0px;
	float:left;
	width:299px;
	height:246px;
	 
	background-color:#cbcbcb;
}
.clocka.cur{
	background-image: url(/public/images/clock_select.png);
	height:19px;
	margin-top:28px;
}
.clocka.cur span{
	top:-80px;
	font-size:32px;
	color:#f1a436;
}
.clocka span{
	font-family:'微软雅黑';
}
 </style>
 <script>
 var nowYear = '';
 function chooseYear(nowYear){
	$("[year]").removeClass('cur');
 
	$("[year='"+nowYear+"']").addClass('cur');
	$("#ny").html(nowYear);
	$(".dtDetail").show();
	$("[yearitem]").hide();
	$("[yearitem='"+nowYear+"']").show(); 
 }
$(function(){
	$("[year]").click(function(){
		var year = $(this).attr('year');
		chooseYear(year);
	});
	
});
 </script>
<div class='footer'>
		<div class='ft1'>
			<div class='main'  >
				<p>
					<?php echo D('Config')->show('footer_left');?><i class='icon_location'><img src='/public/images/icon_location.png'/></i> <?php echo D('Config')->show('footer_mid');?> <i class='icon_target'><img src='/public/images/icon_target.png'/></i> <?php echo D('Config')->show('footer_right');?>
				</p>
			</div>
		</div>
		<div class='ft2'>
			<div class='main'>
				<p class='ft2p1'><?php echo D('Config')->show('footer_1');?>
				<p class='copyright'><?php echo D('Config')->show('footer_2');?></p>
			</div>
		</div>
	</div>
  </body>