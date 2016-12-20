<?php if (!defined('THINK_PATH')) exit();?><div ng-page-nav ></div>

<h1 class="page-title"> {{LANG=='zh'?formData.title:formData.entitle}} <small><?php echo alang("singleCatalog");?></small> </h1>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light form-fit bordered">
			<div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-note font-green"></i>
                                            <span class="caption-subject font-green bold uppercase"><?php echo alang("contentEdit");?></span>
                                        </div>
                                        <div class="actions">
											<!--
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
											-->
                                        </div>
                                    </div>
			<div class="portlet-body form">
			
                                        <!-- BEGIN FORM-->
                                        <form action="#" class="form-horizontal form-bordered">
										<div class="form-body" style='padding:5px;'> 
											<div class="form-body">
												<?php if(ALANG=='zh'){ ?><div fg-input-htmledit   ng-model="formData.content" title='<?php echo alang("contentManage");?>'></div><?php } ?>
												<?php if(ALANG=='en'){ ?><div fg-input-htmledit   ng-model="formData.encontent" title='<?php echo alang("contentManage");?>'></div><?php } ?>
											</div>
											
										</form>
										</div>
										<div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="button" ng-click='subForm()' class="btn blue"> <i class="fa fa-check"></i><?php echo alang('save');?></button>
                                                        <button type="button" class="btn default" ng-back> <?php echo alang('back');?></button>
                                                    </div>
                                                </div>
                                            </div>
		</div>
	</div>
</div>