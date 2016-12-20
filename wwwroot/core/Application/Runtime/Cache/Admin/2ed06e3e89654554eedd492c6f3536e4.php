<?php if (!defined('THINK_PATH')) exit();?><div ng-page-nav ></div>
<h1 class="page-title"> {{title}}  </h1>

<div class="row">
	<div class="col-md-12">
		<div class="portlet light portlet-fit portlet-form bordered">
			<div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">参数配置</span>
                                        </div>
                                         
                                    </div>
									<div class="portlet-body">
                                        <!-- BEGIN FORM-->
                                        <form action="#" class="form-horizontal"  >
                                            <div class="form-body">
                                                <div class="alert alert-danger display-hide">
                                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                <div class="alert alert-success display-hide">
                                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
													
                        
												
												<div fg-input-text ng-model="formData.tel.value" title='联系电话' text='网站的联系电话'></div>
												
												
                                                 
												</div>
		</div>
	</div>
</div>