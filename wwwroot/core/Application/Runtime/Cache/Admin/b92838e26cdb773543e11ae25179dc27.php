<?php if (!defined('THINK_PATH')) exit();?><div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" ng-class="{'page-sidebar-menu-closed': settings.layout.pageSidebarClosed}">
        
        <li class="start nav-item">
            <a href="" menua>
                <i class="icon-home"></i>
                <span class="title"><?php echo alang('welcome');?>管理人员登录</span>
            </a>
        </li>
		<?php
 $catalogs = D('Catalogs')->tree(); $tree = array(); $tree[] = array('title'=>'新闻管理','actionurl'=>'','id'=>'','son'=>$catalogs); $tree[] = array('title'=>'用户管理','id'=>'','icon'=>'icon-users','son'=>array(array('title'=>'用户管理','actionurl'=>'users/list'),array('title'=>'用户组管理','actionurl'=>'users/grouplist'))); $tree[] = array('title'=>'推送管理','id'=>'','icon'=>'icon-shuffle','son'=>array(array('title'=>'推送位管理','actionurl'=>'pushs/list'),array('title'=>'推送数据管理','actionurl'=>'pushs/pushdata'))); $tree[] = array('title'=>'访问记录','actionurl'=>'Visit/log','icon'=>'icon-book-open'); function treeHtml($tree){ $html = ''; if(!$tree) return $html; $html .= ""; $level = 0; foreach($tree as $v){ $level++; $arrow = ''; if($v['son']) $arrow = "<span class=\"arrow\"></span>"; $href = $v['son'] ? 'javascript:void(0);' : "#/".$v["actionurl"]."/".$v['id']; $html .= "<li class=\"nav-item\">"; $hasSon = false; if($v['son']) $hasSon = true; $html .= "<a menua href='$href' title='".$v['title']."' open='$level' class='".($hasSon ? ' nav-toggle':'')."'><i class=\"".($v['icon']?$v['icon']:"icon-note")."\"></i><span>".$v['title']."</span>$arrow</a>"; if($v['son']){ $html .= "<ul class=\"sub-menu\">".treeHtml($v['son'])."</ul>"; } $html .= "</li>"; } return $html; } $cnHtml = treeHtml($tree); ?>
	 
        <?=$cnHtml?>
    </ul>
    <!-- END SIDEBAR MENU -->
	<script>
	$(function(){
		$("[menua]").click(function(){
			$("[menua]").parent().removeClass('active open');
			setMenuaActive($(this));
		});
		function setMenuaActive(obj){
			var tagName = $(obj).parent().prop('tagName');
			if(tagName){
				if(tagName == 'LI') $(obj).parent().addClass('active open');
				setMenuaActive($(obj).parent());
			}
			
		}
	});
	
	</script>
</div>