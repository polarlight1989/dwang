<?php if (!defined('THINK_PATH')) exit();?><mbx id='<?php echo ($catalog_id); ?>'></mbx>
<div class="itabTxtList il2" ng-controller='thumbarcs' style="background-color: #f5f5f5;margin-top:0px;margin-top:0px;padding:.3rem;overflow:hidden;">
	<li ng-repeat="v in data.data">
		<a href="{{v.id|arcurl:'v.catalog_id'}}" class="ipic"><img ng-src="{{v.thumb}}"></a>
			<div class="itcon">
				<div class="itconTit">
					<a href="" class="bicon_tag"></a>
					<a href="{{v.id|arcurl:'v.catalog_id'}}" class="it2title" style="top:.25rem;">{{v.title}}</a>
 				</div>
 				<p class="it2con" style="height:1.2rem;overflow:hidden;line-height:.3rem;color:#a4a4a4">{{v.content|filterHtml}}</p>
				</div>
	</li>
<div></div>
		
 
</div>