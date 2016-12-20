<?php if (!defined('THINK_PATH')) exit();?><mbx id='<?php echo ($catalog_id); ?>'></mbx>
<div style='padding:.3rem' ng-controller='leaders'>
	<div class="leadersList">
		<div class="items" ng-repeat="v in data.data">
					<div style="position:relative;">
					<a href="{{v.id|arcurl:36}}" class="photo"><img ng-src="{{v.thumb}}"></a>
					<div class="itemsTxt">
						<a href="/index.php/zh/arc/36/5" class="aname">{{v.title}}</a>
						<div class="azhiwei">
							职位：{{v.intro}}						</div>
						<div class="acontent">{{v.content}}</div>
					</div>
					</div>
				</div>
								 
 
							 
				</div>
</div>