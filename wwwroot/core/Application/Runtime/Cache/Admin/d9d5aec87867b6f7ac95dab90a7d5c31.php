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
                                            <div class="form-body"  >
                                                
												<div fg-input-text ng-model="formData.title" title='国家' text='国家'></div>
												<div fg-input-textarea ng-model="formData.rules" title='区域' text='每行一个，用|分割，格式如：中国|http://www.china.com/'></div>
												 
												 
											</div>
											 
											 
											<div class="form-actions">
                                                <div class="row">
											 
                                                    <div class="col-md-offset-3 col-md-6">
                                                        <button type="button" class="btn default"  ng-click='subForm()'><?php echo alang("save");?></button>
                                                        <button type="button" ng-back class="btn blue" ><?php echo alang("back");?></button>
                                                    </div>
                                                </div>
                                            </div>
		</div>
	</div>
</div>