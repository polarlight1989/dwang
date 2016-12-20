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
<?php
$focus = D('Thumbs')->WHERE(array('catalog_id'=>100))->SELECT(); if($focus){ ?>
<div class="main focus">
	<div class="fbox">
 		<?php  $row=0; foreach($focus as $v){ ?>
			<li class="<?=$row++==0?'cur':''?>" href='<?=$v["title"]?$v["title"]:"javascript:void(0);"?>'>
				<a href='<?=$v["title"]?$v["title"]:"javascript:void(0);"?>' <?=$v["title"]?'target="_blank"':'';?> ><img src="<?php echo ($v["thumb"]); ?>" width="1280px" height="427px"></a>
			</li>
		<?php } ?>
	</div>
</div>
<?php } ?>
<div class="main row" style="margin-top:28px;">
 <?php
 $pageLength = 4; $page = I('GET.page',1); $arcs = D('Arcs')->WHERE(array('lang'=>LANG,'catalog_id'=>43))->page($page,$pageLength)->SELECT(); $count = D('Arcs')->WHERE(array('lang'=>LANG,'catalog_id'=>43))->count(); ?>
		<!--ͼƬ�б�-->
		<div class="itabPicList il2" style='margin-top:0px;'>
			<?php
 $row=0; if($arcs) foreach($arcs as $data){ $row++; ?>
			<div class="col-md-3 yyright" style='z-index:<?=1000-$row?>'>
				<img src="<?php echo ($data["thumb"]); ?>" width="320px" height="233px">
				<div class="itabConB">
					<span><?php echo (msubstr($data["title"],10,0)); ?><br/><?php echo (msubstr($data["intro"],10)); ?></span>
					<span href="" class=""></span>
					<a href="" class="icon1"></a>
					<a href="" class="icon2"></a>
					<a href="" class="icon3"></a>
					<a href="" class="icon_down"></a>
				</div>
				<div class="itwrap" style="display: none;">
					
					<div class="itinnerd">
						<div class="itw1">
							<span class="iicon_tag"></span>
							<div class="itwheader"><?php echo (msubstr($data["title"],24,0)); ?></div>
						</div>
						<div class="itw2">
							<?php echo lang('Upload time');?>:<?php echo date('Y-m-d',$data[cdate]);?><br>
							<?php echo lang('Click times');?>:157 <?php echo lang('times');?>
						</div>
						<div class="itw3">
						</div>
						<div class="itw2">
							<?php echo ($data["intro"]); ?>
						</div>
						<a href="<?php echo arcHref($data[id],43);?>" class="itwbtn"><?php echo lang('READ MORE');?></a>
					</div>
					 
						
					 
				</div>
				 <i class='yy'></i>
			</div>
			
			<?php } ?>
			
		</div>
		
		 
	</div>
	
	
	
	
	
<div class="main row in3">
		<div class=" in3b">
			<div>
				<?php
 if(C('LANG') == 'zh'){ ?>
				<h1>我们 <br>在全球</h1>
				<?php } ?>
				<?php
 if(C('LANG') == 'en'){ ?>
				<h1>WE ARE <br>IN THE WORLD</h1>
				<?php } ?>
				<div>
					<img src="/public/temp/index_pic.jpg">
				</div>
				<div class="in3bsel">
				<select style='padding:3px;' selectArea><option   value='1' selected><?php echo getLang('SELECTION REGION');?></option><?php echo getAreaOptions();?></select>
				</div>
			</div>
		</div>
		<div class=" in3b">
			<div>
				<h1><?php echo lang('ABOUT US');?></h1>
				<div>
					<p style="padding:5px 0px;line-height:22px;">
						<?php
 if(LANG == 'zh'){ ?>
						上海城建国际工程有限公司（以下简称“城建国际”）是一家以海外工程建设、设计和管理、投资、建筑设备销售为一体的国际公司。城建国际整合了上海城建集团原有的海 外业务，认真总结和吸取集团近年来新加坡、印度、安哥拉、香港等海外市场所取得的经验，依托集团的整体优势并充分利用原有资源，发挥其在投资、设计、施工、机械制 造等专业领域的技术优势和核心业务优势，高水平地投身于海外工程建设。
						<?php } ?>
						<?php
 if(LANG == 'en'){ ?>
					Shanghai Urban Construction International Engineering Co., Ltd. (hereinafter referred to as the "urban construction international") is a home to overseas engineering construction, design and management, investment, construction equipment sales as one of the international company. Urban construction international integration of the Shanghai Urban Construction Group, the original overseas business, conscien
						<?php } ?>
					</p>
				</div>
				<div>
					<img src="/public/temp/inpic4.jpg">
				</div>
				 
			</div>
			<div class="in3bzz">
					<p><?php echo lang('ABOUT US');?></p>
					<a href="<?php echo catalogHref('35');?>"><?php echo lang('READ MORE');?></a>
				</div>
		</div>
		<div class=" in3b">
			<div>
				<h1><?php echo lang('NEWS');?></h1>
				<div class="in3bli">
					<?php
 $arcs = D('Arcs')->WHERE(array('lang'=>LANG,'catalog_id'=>52))->page(1,6)->SELECT(); if($arcs) foreach($arcs as $v){ ?>
					<li><i></i><a href="<?php echo catalogHref('39');?>"><?php echo ($v["title"]); ?></a></li>
					<?php } ?>
				</div>
				<div>
					<a href="<?php echo catalogHref('52');?>"><img src="/public/temp/inpic4.jpg"></a>
				</div>
				
			</div>
			
		</div>
		
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