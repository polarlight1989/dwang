<?php if (!defined('THINK_PATH')) exit();?><div class='indexbg'>
<div class='conbody'>
	<div class='row1 itabPicList'>
		<div class='col-xs-6 yyright' ng-repeat="v in list">
			<a href='#/arc/detail/{{v.id}}'>
				<img class='rthumb' ng-src="{{v.thumb}}" width="3.2rem" height="2.33rem" title='{{v.title}}'>
				<div class="itabConB">
					<span>{{v.title|substr:20}}<br>{{v.title|substr:20:20}}...</span>
					<span href="" class=""></span>
					<a href="" class="icon1"></a>
					<a href="" class="icon2"></a>
					<a href="" class="icon3"></a>
					<a href="" class="icon_down"></a>
				</div>
			</a>
			<i class="yy"></i>
		</div>
		 
		<i class="yy"></i>
	</div>
	<div class='in3'>
		<div class=" in3b">
			<div>
				<h1>{{'catalog_52'|lang}}</h1>
				<div class="in3bli">
					<li ng-repeat="v in gsdt"><i></i><a href="#/arc/detail/{{v.id}}">{{v.title}}</a></li> 
				</div>
				<div class='inb3d'>
					<a href="javascript:;"><img src="./public/temp/tem3.png" style='width:2.5rem;height: 1.15rem;'></a>
					<a href='#/catalog/list/{{v.id}}' class='morea'>MORE</a>
				</div>
				
			</div>
			
		</div>
	</div>
</div>
</div>