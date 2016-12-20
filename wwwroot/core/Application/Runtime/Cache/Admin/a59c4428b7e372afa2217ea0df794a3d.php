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
                                                <div fg-select-catalogs ng-model="formData.catalog_id" title='<?php echo alang("selectCatalog");?>' text='栏目' lang='zh'></div>
												<div fg-input-text ng-model="formData.title" title='<?php echo alang("title");?>' text='<?php echo alang("title");?>'></div>
												<div fg-input-checkbox ng-model="formData.push_id" title='推送位' data='pushData'></div>
                                                <div fg-input-checkbox ng-model="formData.push_group" title='推送用户组' data='usersGroupData' all='全部'></div>
												<div fg-img-upload ng-model="formData.thumb" title='<?php echo alang("Catalog Thumb");?>'></div>
												<div fg-input-date ng-model="formData.cdate" title='<?php echo alang("Publish Date");?>' text='<?php echo alang("Publish Date");?>'></div>
												<div fg-input-text ng-model="formData.intro" title='<?php echo alang("Intro");?>' text='<?php echo alang("Intro");?>'></div>
												<div fg-input-text ng-model="formData.video" title='视频地址' text='视频地址'></div>
												<div fg-input-htmledit ng-model="formData.content" title='<?php echo alang("contentmanage");?>'></div>
												 
												 
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