<?php if (!defined('THINK_PATH')) exit();?><div ng-page-nav ></div>
<h1 class="page-title"> {{title}}  </h1>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light portlet-fit portlet-form bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class=" icon-layers font-green"></i>
					<span class="caption-subject font-green sbold uppercase">{{txtMode}}</span>
                </div>
			</div>
			<div class="portlet-body">
				<form action="#" class="form-horizontal"  >
					<div class="form-body">
						<div fg-input-text ng-model="formData.tel" title='联系电话' text='联系电话'></div>
						<div fg-img-upload ng-model="formData.banner_3" title='Banner - 企业概况'></div>
						<div fg-img-upload ng-model="formData.banner_38" title='Banner - 媒体中心'></div>
						<div fg-img-upload ng-model="formData.banner_40" title='Banner - 加入我们'></div>
						<div fg-img-upload ng-model="formData.banner_42" title='Banner - 产品与服务'></div>
						<div fg-input-text ng-model="formData.footer_left" title='页底信息 - 左' text='页底信息 - 左'></div>
						<div fg-input-text ng-model="formData.footer_mid" title='页底信息 - 中' text='页底信息 - 中'></div>
						<div fg-input-text ng-model="formData.footer_right" title='页底信息 - 右' text='页底信息 - 右'></div>
						<div fg-input-text ng-model="formData.footer_1" title='版权信息1' text='版权信息1'></div>
						<div fg-input-text ng-model="formData.footer_2" title='版权信息2' text='版权信息1'></div>
					</div>
					<div class="form-actions">
                                                <div class="row">
											 
                                                    <div class="col-md-offset-3 col-md-6">
                                                        <button type="button" class="btn default"  ng-click='subForm()'><?php echo alang("save");?></button>
                                                        <button type="button" ng-back class="btn blue" ><?php echo alang("back");?></button>
                                                    </div>
                                                </div>
                                            </div>
				</form>
			</div>
		</div>
	</div>
</div>