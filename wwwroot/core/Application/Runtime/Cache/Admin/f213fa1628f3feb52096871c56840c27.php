<?php if (!defined('THINK_PATH')) exit();?><div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" ng-class="{'page-sidebar-menu-closed': settings.layout.pageSidebarClosed}">
        <li class="sidebar-search-wrapper">
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <form class="sidebar-search sidebar-search-bordered" action="#" method="POST">
                <a href="javascript:;" class="remove">
                    <i class="icon-close"></i>
                </a>
                <div class="input-group" style='height:32px;border:none;'><!--
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <a href="javascript:;" class="btn submit">
                            <i class="icon-magnifier"></i>
                        </a>
                    </span>-->
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="start nav-item">
            <a href="#/welcome" menua>
                <i class="icon-home"></i>
                <span class="title"><?php echo alang('welcome');?></span>
            </a>
        </li>
		<?php
 $tree = D('Catalogs')->tree(); $tree[] = array('title'=>'首页焦点图','actionurl'=>'catalogs/thumbs','id'=>'100'); $tree[] = array('title'=>'页面参数','actionurl'=>'config/conf'); function treeHtml($tree){ $html = ''; if(!$tree) return $html; $html .= ""; $level = 0; foreach($tree as $v){ $level++; $arrow = ''; if($v['son']) $arrow = "<span class=\"arrow\"></span>"; $href = $v['son'] ? 'javascript:void(0);' : "#/".$v["actionurl"]."/".$v['id']; $html .= "<li class=\"nav-item\">"; $hasSon = false; if($v['son']) $hasSon = true; $html .= "<a menua href='$href' title='".$v['title']."' open='$level' class='".($hasSon ? ' nav-toggle':'')."'><i class=\"icon-note\"></i><span>".$v['title']."</span>$arrow</a>"; if($v['son']){ $html .= "<ul class=\"sub-menu\">".treeHtml($v['son'])."</ul>"; } $html .= "</li>"; } return $html; } $cnHtml = treeHtml($tree); ?>
	 
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