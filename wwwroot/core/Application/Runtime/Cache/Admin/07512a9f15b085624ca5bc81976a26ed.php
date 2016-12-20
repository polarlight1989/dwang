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
                                        <!-- BEGIN FORM-->
                                        <form action="#" class="form-horizontal"  >
                                            <div class="form-body" >
                                                <div fg-input-select ng-model="formData.group_id" title='用户组' text='' data='usersGroup'></div>
                                                <div fg-input-text ng-model="formData.name" title='用户名' text='用户名'></div>
                                                <div fg-input-text ng-model="formData.pwd" title='用户密码' text='用户密码'></div>
                                                <div fg-input-text ng-model="formData.phone" title='手机号' text='手机号'></div>
                                                <div fg-input-text ng-model="formData.email" title='电子邮件' text='电子邮件'></div>
												<div fg-input-date ng-model="formData.cdate" title='添加时间' text='添加时间'></div>
												 
											</div>
											 
											<div class="form-actions">
                                                <div class="row">
											 
                                                    <div class="col-md-offset-3 col-md-6">
                                                        <button type="button" back-btn class="btn default">返回</button>
                                                        <button type="button" class="btn blue" ng-click='subForm()'>提交</button>
                                                    </div>
                                                </div>
                                            </div> 
		</div>
	</div> 
</div>