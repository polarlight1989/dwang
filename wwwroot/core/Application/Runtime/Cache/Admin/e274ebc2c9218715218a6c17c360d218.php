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
                                                <div class='form-group'>
                                                <label class="col-md-3 control-label ng-binding" for="form_control" style="color:#000000"> 推送内容</label>
                                                <div class="col-md-9">
                                                    <div class="table-scrollable table-scrollable-borderless">
                                            <table class="table table-hover table-light">
                                                <thead>
                                                    <tr class="uppercase">
                                                        <th> #ID </th>
                                                        <th> 文章 </th> 
                                                        <th style='width:50%'> 简介 </th>
                                                        <th> 操作 </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr ng-repeat="v in arcData">
                                                        <td> {{v.id}} </td>
                                                        <td> {{v.title}} </td> 
                                                        <td> {{v.intro}} </td>
                                                        <td>
                                                            <a href="javascript:;" ng-click='arcDataRemove(v.id)' class="btn btn-xs red"> <i class="fa fa-times"></i> 移除 </a>
                                                        </td>
                                                    </tr>
                                                     
                                                </tbody>
                                            </table>
                                        </div>

                                                </div>
                                            </div>
                                                <div fg-input-checkbox ng-model="formData.push_id" title='推送位' data='pushData'></div>
                                                <div fg-input-checkbox ng-model="formData.push_group" title='推送用户组' data='usersGroupData' all='全部'></div>
                                                 
												 
											</div>
											 
											<div class="form-actions">
                                                <div class="row">
											 
                                                    <div class="col-md-offset-3 col-md-6">
                                                        <button type="button" class="btn default" backBtn>返回</button>
                                                        <button type="button" class="btn blue" ng-click='subForm()'>提交</button>
                                                    </div>
                                                </div>
                                            </div>
		</div>
	</div> 
</div>