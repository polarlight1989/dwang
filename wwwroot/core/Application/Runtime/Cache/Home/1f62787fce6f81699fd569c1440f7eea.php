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
	<script src="/public/videojs/video.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
    VideoJS.setupAllWhenReady();
  </script>
  <link rel="stylesheet" href="/public/videojs/video-js.css" type="text/css" media="screen" title="Video JS">
  
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
		<?php
 $map = array('lang'=>C('LANG'),'catalog_id'=>$catalog['id']); $data = D('Arcs')->WHERE($map)->ORDER("cdate DESC")->SELECT(); foreach($data as $k=>$v){ $data[$k]['cdate'] = date("Y/m/d",$data[$k]['cdate']); $data[$k]['frm'] = "/index.php/video/".(str_replace("/","*",$v["intro"]))."/".(str_replace("/","*",$v["thumb"]))."/".(str_replace("/","*",$v["title"])).""; } ?>
		<!-- 文字列表 -->
		<div class='itabTxtList il2' style='background-color:#f5f5f5;overflow:hidden;padding:0px 0px;' >
			<div class='videoList'>
				<div class='vlShow' id='itemThumb'  >
					<!--<div class='vltitle'><div id='itemTitle'></div></div>
					<a class='videoplay' id="videoplay" video="" href='javascript:startVideo()'></a>
					<div class='vlbar'></div>-->
				<div style='position:absolute;top:0px;left:0px;width:850px;height:640px;'>
					<iframe width='850px' src='' id='fmr' height="640px" frameborder="no" border="0"  marginwidth="0" marginheight="0" scrolling="no"  ></iframe>
				</div>
				</div>
				<div class='videoscroll'>
					<div class='vsrc'>
						<div class='vsrctitle'><?php echo lang('MORE VIDEOS');?></div>
						
						<ul class='vsrul'>
							<a href='javascript:pageFX(0);' class='jt'></a>
							<div style='height:375px;overflow:hidden' id='scrollBox'>
								<div class='vrbox'>
							 
								</div>
							</div>
							<a href='javascript:pageFX(1);' class='jt up'></a>
						</ul>
						
					</div>
					<div class='vlistca'>
					</div>
				</div>
			</div>
			<div id='vlTxt'>
			
			</div>
			<div style='width:1200px;margin:0px auto;margin-top:50px;'>
				 
			</div>
		</div>
		<script>
		var data = <?=json_encode($data)?>;
		var nowpage = 0;
		var pageCount = 0;
		function pageFX(i){
			if(i){
				nowpage++;
			}else{
				nowpage--;
			}
			pageChange();
		}
		function pageChange(i){
			if(i) nowpage = i;
			if(nowpage<0) nowpage = pageCount-1;
			if(nowpage>=pageCount) nowpage = 0;
			var mt = (nowpage) * parseInt($("#scrollBox").height());
	 
			$(".vrbox").animate({'marginTop':(0-mt)},200);
			$(".pchange").removeClass('cur');
			$(".pchange").eq((nowpage)).addClass('cur');
		}
		function pageInit(){
			var html ="";
			var count = 0;
			for(var i in data){
				count++;
				var v = data[i];
				 
				html += "<li><a href='javascript:playvideo("+i+");'  class='vsliimg'><img src='"+v.thumb+"' height='95px'/></a><a href='javascript:playvideo("+i+");' class='vslitxt'>"+v.title+"<br/>"+v.cdate+"</a></li>";
			}
			$(".vrbox").html(html);
			
			var liheight = $(".vrbox").eq(0).height();
			var allheight = count * liheight;
			pageCount = Math.ceil(count/3);
			for(i=0;i<pageCount;i++){
				var className = i==0?'cur':'';
				$(".vlistca").append(" <a href='javascript:pageChange("+i+")' class=' pchange "+className+"'></a> ");
			}
		}
		$(function(){
			pageInit();
			playvideo(0);
		});
		function playvideo(i){
 
			$("#fmr").attr('src',data[i]['frm']);
			$("#vlTxt").html(data[i]['content']);
		}
		</script>
 </div>
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