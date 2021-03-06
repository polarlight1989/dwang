<?php if (!defined('THINK_PATH')) exit();?> 
<div class="row"  >
 
	<div class="col-md-12"> 
		<!-- Begin: life time stats -->
		<div class="portlet light portlet-fit portlet-datatable bordered">
			<div class="portlet-title" ng-if="title">
				<div class="caption">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject font-dark sbold uppercase">{{title}}</span>
                                        </div>
				<div class='actions'>
					<span ng-repeat='v in actions' ng-bind-html="v.html"></span>
				</div>
			</div>
			<div class="portlet-body"  >
			<div class='table-container' style='position:relative;'>
				<div class='dataTables_wrapper dataTables_extended_wrapper no-footer'>
					<div class='row'>
						<div class='col-md-8 col-sm-12'>
							<div class='dataTables_paginate paging_bootstrap_extended'>
								<div class="pagination-panel">
									页 
									<a href="javascript:void(0);" class="btn btn-sm default prev " ng-click="changePages('prev')" ng-class="{1:'disabled'}[noPrev]" title="上一页"><i class="fa fa-angle-left"></i></a>
									<input type="text" class="pagination-panel-input form-control input-mini input-inline input-sm" maxlenght="5" style="text-align:center; margin: 0 5px;" value='{{page}}'>
									<a href="javascript:void(0);" class="btn btn-sm default next" ng-click="changePages('next')" ng-class="{1:'disabled'}[noNext]"  title="下一页"><i class="fa fa-angle-right"></i></a>
									- <span class="pagination-panel-total">共{{allPage}}页</span>
								</div>
								 
							</div>
							<div class="dataTables_length" id="datatable_ajax_length"><label><span class="seperator">|</span>每页
							<select name="datatable_ajax_length"  class="form-control input-xsmall input-sm input-inline" ng-model='length' ng-change='changeLength()'>
								<option value="{{v}}" ng-if="v" ng-repeat="(k,v) in pageArr">{{v}}</option>
								 </select> 条数据</label></div>
							<div class="dataTables_info" id="datatable_ajax_info" role="status" aria-live="polite"><span class="seperator">|</span>共查询到 {{data.count}} 条数据</div>
						</div>
						
						<div class="col-md-4 col-sm-12">
							<div class="table-group-actions pull-right" ng-if="oper">
								<span ng-if="selectids.length">已选择{{selectids.length}}条数据:  </span>
								<select class="table-group-action-input form-control input-inline input-small input-sm" ng-model="operAction" id='operAction'>
									<option value="">请选择操作项</option>
									<option value="{{k}}" ng-repeat="(k,v) in oper" class="ng-binding ng-scope"> {{v}} </option> 
								</select>
								<button class="btn btn-sm yellow table-group-action-submit" ng-click="operSubmit()">
									<i class="fa fa-check">
									</i>
									提交 
								</button>
							</div>
						</div>
					</div>
					<div class='table-scrollable'>
						<table class="table table-striped table-bordered table-hover" id="datatable"> 
			<!-- 表头 Begin -->
			<thead>
				<tr role="row" class="heading">
					<th  width="{{v.width}}" ng-repeat='v in columns'>
						<label ng-if='v.selectid' ckbox  class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input ng-click="checkAll()" checkAll checkitem name="{{selectid}}[]" type="checkbox" class="checkboxes" value=""/><span></span></label>
						<span ng-if='!v.selectid'>{{v.title}}</span> 
					</th>
				</tr>
				<tr role="row" class="filter">
					<!-- 搜索区 -->
					<td ng-repeat='v in columns' >
						<!-- 文本搜索 -->
						<input ng-if="v.search.type == 'text'" type="text" class="form-control form-filter " placeholder="{{v.search.title}}" name="searchparams[{{v.search.mode}}][{{v.search.field}}]">
						<!-- select -->
						<select ng-if="v.search.type == 'select'" class="form-control form-filter" name="searchparams[{{v.search.mode?v.search.mode:'equal'}}][{{v.search.field}}]"><option ng-if="v.search.title" value="*">{{v.search.title}}</option><option ng-repeat="(kk,vv) in v.search.data" value="{{kk}}" ng-if="vv">{{vv}}</option></select>
						<div class="margin-bottom-5"  ng-if="v.search.type == 'betweentext'">
						<input type="text" class="form-control form-filter input-sm" name="searchparams[between][{{v.search.field}}_min]" placeholder="{{v.search.minTitle}}"></div>
						<input type="text" class="form-control form-filter input-sm" name="searchparams[between][{{v.search.field}}_max]" placeholder="{{v.search.maxTitle}}" ng-if="v.search.type == 'betweentext'"> 

						<div class="margin-bottom-5"  ng-if="v.search.type == 'betweendate'">
						<input type="text" class="form-control form-filter input-sm date-picker" name="searchparams[between][{{v.search.field}}_min]" data-date-format="yyyy年mm月dd日" placeholder="{{v.search.minTitle}}"></div>
						<input type="text" class="form-control form-filter input-sm date-picker" name="searchparams[between][{{v.search.field}}_max]"  data-date-format="yyyy年mm月dd日" placeholder="{{v.search.maxTitle}}" ng-if="v.search.type == 'betweendate'">

						<!-- Operation -->
						<div ng-if="v.search == 'operation'">
							<div class="margin-bottom-5" >
								<button class="btn btn-sm yellow filter-submit margin-bottom" ng-click='submitFilter()'>
									<i class="fa fa-search">
									</i> 搜索
								</button>
							</div>
							<button class="btn btn-sm red filter-cancel">
								<i class="fa fa-times">
								</i> 重置
							</button>
						</div>

					</td>
				</tr>
			</thead>
			<!-- 表头 End -->
			<!-- 表主体 Begin -->
			<style>
			.w30{width:30px;}
			</style>
			
			<tbody id='dataTbody'>
				<tr ng-repeat="row in data.data">
 
					<td ng-repeat="column in columns" style='width:{{column.width}}' ng-bind-html="column|parseDatatableItem:row|trusted">
			 
						
					</td>
				</tr>
				<tr ng-if='data.count==0' class="odd">
					<td valign="top" colspan="7" class="dataTables_empty datatable_item" style='text-align:center;'>{{resultStatus}}</td>
				</tr>
			</tbody>
			<!-- 表主体 Begin -->
		</table>
		<!-- 表 End -->
					</div>
				</div>
				<div class="blockUI blockMsg blockElement" ng-if='loading.status==1' style="z-index: 1011; position: absolute; padding: 0px; margin: 0px; width: 30%; top: {{loading.top}}px; left: {{loading.left}}px; text-align: center; color: rgb(0, 0, 0); border: 0px; cursor: wait;">
					<div class="loading-message loading-message-boxed">
						<img src="/core/Public/Angular/img/loading-spinner-grey.gif" align=""><span>&nbsp;&nbsp;读取中...</span>
					</div>
				</div>
			</div>
			 
	 
	 
</div>
		</div>
		<!-- End: life time stats -->
	</div>
</div>