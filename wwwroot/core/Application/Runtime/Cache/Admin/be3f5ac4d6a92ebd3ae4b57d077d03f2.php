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
                                            <div class="form-body" ng-if='formData.catalog_id != 37 && formData.catalog_id != 48'>
                                                <div fg-select-catalogs ng-model="formData.catalog_id" title='<?php echo alang("selectCatalog");?>' text='栏目' lang='zh'></div>
												<div fg-input-text ng-model="formData.title" title='<?php echo alang("title");?>' text='<?php echo alang("title");?>'></div>
												<div fg-img-upload ng-model="formData.thumb" title='<?php echo alang("Catalog Thumb");?>'></div>
												<div fg-input-date ng-model="formData.cdate" title='<?php echo alang("Publish Date");?>' text='<?php echo alang("Publish Date");?>'></div>
												<div fg-input-text ng-model="formData.intro" title='<?php echo alang("Intro");?>' text='<?php echo alang("Intro");?>'></div>
												<div fg-input-htmledit ng-model="formData.content" title='<?php echo alang("contentmanage");?>'></div>
												 
												 
											</div>
											<div class="form-body" ng-if='formData.catalog_id == 48'>
												<input type='hidden' value='' ng-model="formData.catalog_id" id='catalog_id' />
												<div fg-input-text ng-model="formData.title" title='标题' text='文档标题'></div>
												<div fg-img-upload ng-model="formData.thumb" title='视频图片'></div>
												<div fg-input-date ng-model="formData.cdate" title='发布时间' text='文章简介'></div>
												<div fg-input-text ng-model="formData.intro" title='视频地址' text='支持FLV/MP4格式视频'></div>
												<div fg-input-htmledit ng-model="formData.content" title='内容管理'></div>
												 
												<script>
												$(function(){
													setTimeout(function(){
														$("#catalog_id").val('48');
														$("#catalog_id").trigger('change');
													});
													
												});
												</script>
											</div>
											<div class="form-body" ng-if='formData.catalog_id == 37'>
												<div fg-input-text ng-model="formData.title" title='职位名称' text='职位名称'></div>
												<div fg-input-text ng-model="formData.intro" title='区域' text='区域'></div>
												<div fg-input-date ng-model="formData.cdate" title='发布时间' text='文章简介'></div>
	 
												<div fg-input-htmledit ng-model="formData.content" title='内容管理'></div>
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