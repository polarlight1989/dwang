function cl(a){
	console.log(a);
}
app.controller('arcsList', function($scope) {
	$scope.mod = 'Arcs';
	$scope.columns = [{
	
	}];
});
app.controller('configConf', function($scope,$req) {
	$scope.mod = 'Config';
	$scope.txtMode = '页面参数';
    $scope.formData = {};
	$req.g('Config','gs',{}).success(function(responce){
		cl(responce);
		$scope.formData = responce;
	})
	$scope.subForm = function(){
		var params = $scope.formData;
 		
		$req.FH($scope.mod,'ss',params);
	}
});
app.controller('html', function($scope,$req) {
	$scope.alang = ALANG;
});
app.controller('catalogsThumbs',function($scope,$stateParams,$req,$timeout){
	$scope.data = {};
	$scope.cata = {};
	$req.p('Catalogs','getOne',{id:$stateParams.id}).success(function(responce){
		$scope.cata = (responce);
	});
	$scope.addThumb = function(params){
		
		$req.p('Thumbs','adds',{'thumbs':params,'catalog_id':$stateParams.id}).success(function(responce){
			$scope.getData();
		});
	}
	$scope.getData = function(){
		$req.p('Thumbs','selectData',{'catalog_id':$stateParams.id}).success(function(responce2){
			$scope.data = (responce2);
			$timeout(function(){
				$("[titleid]").bind('blur',function(){
					var id = $(this).attr('titleid');
					var val = $(this).val();
					var params = {};
					params['id'] = id;
					params['title'] = val;
					$req.p('Thumbs','rsave',params).success(function(responce){
						
					});
				});
			},500);
		});
	}
	//删除
	$scope.delOne = function(id){
		$req.p('Thumbs','operAction',{'operAction':'delete','ids':id}).success(function(responce){
			$("#arc"+id).fadeOut();
		});
	}
	$scope.getData();
});
app.filter('entertobr',function(){
	return function(text){
		return text.replace(/\n/g,'<br/>');
	}
})
app.controller('areasList', function($scope,$req,$timeout,$stateParams) {
	$scope.mod = 'Areas';
	$scope.title= '区域管理';
	$scope.oper = {
		'delete':'删除'
	};
	$scope.actions = [
		{
			html : '<a href="#/areas/detail/45/0" class="btn btn-sm green"> 添加区域  <i class="fa fa-plus"></i> </a>',
		}
	];
	$scope.columns = [
		{
			selectid:'id',
			width:'30px'
		},
		{
			title:'国家',
			html:'{{title}}',
			search : {
				field:'title',
				title:'请输入国家',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'区域',
			html:'{{rules|entertobr}}',
			search : {
				field:'title',
				title:'请输入区域',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'操作',
			width:'60px',
			html:'<a href="#/areas/detail/'+$stateParams.id+'/{{id}}" class="btn btn-xs default"><i class="fa fa-search"></i> 编辑</a>',
			search:'operation'
		}
	];
});
app.controller('pushsList', function($scope,$req,$timeout,$stateParams) {
	$scope.mod = 'Pushs';
	$scope.title= '推送位管理';
	$scope.actions = [
		{
			html : '<a href="#/pushs/detail/0" class="btn btn-sm green"> 添加推送位  <i class="fa fa-plus"></i> </a>',
		}
	];
	$scope.columns = [
		{
			selectid:'id',
			width:'30px'
		},
		{
			title :'ID',
			html :'{{id}}'
		},
		{
			title:'推送位名称',
			html:'{{name}}',
			search : {
				field:'name',
				title:'请输入推送位名称',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'简介',
			html:'{{intro}}',
			search : {
				field:'name',
				title:'请输入关键字',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'创建时间',
			html:'{{cdate*1000|date:"yyyy-MM-dd  "}}',
			search : {
				field:'cdate', 
				mod:'like',
				type:'betweendate',
				minTitle:'起始时间',
				maxTitle:'截止时间'
			}
		},
		{
			title:'操作',
			width:'60px',
			html:'<a href="#/pushs/detail/{{id}}" class="btn btn-xs default"><i class="fa fa-search"></i> 编辑</a>',
			search:'operation'
		}
	];
});
app.controller('usersGrouplist', function($scope,$req,$timeout,$stateParams) {
	$scope.mod = 'UsersGroup';
	$scope.title= '用户组管理';
	$scope.actions = [
		{
			html : '<a href="#/users/groupdetail/0" class="btn btn-sm green"> 添加用户组  <i class="fa fa-plus"></i> </a>',
		}
	];
	$scope.columns = [
		{
			selectid:'id',
			width:'30px'
		},
		{
			title :'ID',
			html :'{{id}}'
		},
		{
			title:'组名称',
			html:'{{name}}',
			search : {
				field:'name',
				title:'请输入组名称',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'简介',
			html:'{{intro}}',
			search : {
				field:'name',
				title:'请输入关键字',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'创建时间',
			html:'{{cdate*1000|date:"yyyy-MM-dd  "}}',
			search : {
				field:'cdate', 
				mod:'like',
				type:'betweendate',
				minTitle:'起始时间',
				maxTitle:'截止时间'
			}
		},
		{
			title:'操作',
			width:'60px',
			html:'<a href="#/users/groupdetail/{{id}}" class="btn btn-xs default"><i class="fa fa-search"></i> 编辑</a>',
			search:'operation'
		}
	];
});

app.controller('VisitLogs', function($scope,$req,$timeout,$stateParams) {
	$scope.mod = 'VisitLogs';
	$scope.title= '访客记录';
	$scope.oper = {
		'delete':'删除'
	}; 
	$scope.columns = [
		{
			selectid:'id',
			width:'30px'
		},
		{
			title:'访问时间',
			html:'{{cdate*1000|date:"yyyy年mm月dd日 HH:mm:ss"}}',
			search : {
				field:'cdate',
				minTitle:'起始时间',
				maxTitle:'结束时间',
				mod:'like',
				type:'betweendate'
			}
		},
		{
			title:'访问IP',
			html:'{{ip}}',
			search : {
				field:'ip',
				title:'请输入IP',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'用户',
			html:'{{user_name}}',
			search : {
				field:'user.name',
				title:'请输入用户名',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'受访文章',
			html:'{{arc_title}}',
			search : {
				field:'arc.title',
				title:'请输入文章名',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'操作',
			width:'60px',
			html:'',
			search:'operation'
		}
	];
});
app.controller('users_list', function($scope,$req,$timeout,$stateParams,$staticData) {
	$scope.mod = 'Users';
	$scope.title= '区域管理';
	$scope.oper = {
		'delete':'删除'
	};
	$scope.actions = [
		{
			html : '<a href="#/users/detail/0" class="btn btn-sm green"> 添加用户  <i class="fa fa-plus"></i> </a>',
		}
	];
	$scope.columns = [
		{
			selectid:'id',
			width:'30px'
		},
		{
			title:'用户名',
			html:'{{name}}',
			search : {
				field:'name',
				title:'请输入用户名',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'手机',
			html:'{{phone}}',
			search : {
				field:'phone',
				title:'请输入手机号码',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'Email',
			html:'{{email}}',
			search : {
				field:'email',
				title:'请输入Email',
				mod:'like',
				type:'text'
			}
		},
		{
			title:'用户组',
			html:'{{group_id?(group_id|staticValue:"UsersGroup"):"无用户组"}}',
			search : {
				field:'group_id',
				title:'请选择',
				data:$staticData.getKV('UsersGroup','id','name'),
				type:'select'
			}
		},
		{
			title:'添加时间',
			html:'{{ cdate*1000 | date : "yyyy-MM-dd"}}',
			search : {
				field:'cdate',
				minTitle:'起始时间',
				maxTitle:'结束时间',
				mod:'like',
				type:'betweendate'
			}
		},
		{
			title:'操作',
			width:'60px',
			html:'<a href="#/users/detail/{{id}}" class="btn btn-xs default"><i class="fa fa-search"></i> 编辑</a>',
			search:'operation'
		}
	];
}); 
app.controller('users_detail', function($scope,$req,$timeout,$stateParams,$staticData) {
	$scope.title = '用户管理';
	$scope.mod = 'Users';
	$scope.usersGroup = $staticData.getKV('UsersGroup','id','name');  
	$scope.usersGroup['0'] = '请选择用户组'; 
	$scope.txtMode = $stateParams.id==0?'添加用户':'用户编辑';
	$scope.formData = {};
	$scope.formData.group_id = 0;
	$req.g($scope.mod,'getOne',{id:$stateParams.id}).success(function(responce){
		$scope.formData = responce; 
	});
	$scope.subForm = function(){
		var params = $scope.formData;
 
		$req.FH($scope.mod,'rsave',params);
	}
});
app.controller('usersGroupDetail', function($scope,$req,$timeout,$stateParams) {
	$scope.title = '用户组管理';
	$scope.mod = 'UsersGroup';
	$scope.txtMode = $stateParams.id==0?'添加用户组':'用户组编辑';  
	$req.g($scope.mod,'getOne',{id:$stateParams.id}).success(function(responce){
		$scope.formData = responce; 
	});
	$scope.subForm = function(){
		var params = $scope.formData;
 
		$req.FH($scope.mod,'rsave',params);
	}
});
app.controller('pushsDetail', function($scope,$req,$timeout,$stateParams) {
	$scope.title = '推送位管理';
	$scope.mod = 'Pushs';
	$scope.txtMode = $stateParams.id==0?'添加推送位':'推送位编辑';  
	$req.g($scope.mod,'getOne',{id:$stateParams.id}).success(function(responce){
		$scope.formData = responce; 
	});
	$scope.subForm = function(){
		var params = $scope.formData;
 
		$req.FH($scope.mod,'rsave',params);
	}
});
app.controller('areasDetail', function($scope,$req,$timeout,$stateParams) {
 
	$scope.mod = 'Areas';
	$scope.txtMode = $stateParams.id==0?'添加区域':'区域信息';
	$scope.formData = {};
	$req.g($scope.mod,'getOne',{id:$stateParams.id}).success(function(responce){
		$scope.formData = responce; 
	});
	$scope.subForm = function(){
		var params = $scope.formData;
 
		$req.FH($scope.mod,'rsave',params);
	}
});
app.controller('joinusDetail', function($scope,$req,$timeout,$stateParams) {
 
	$scope.mod = 'Joinus';
	$scope.txtMode = $stateParams.id==0?'添加信息':'事记信息';
	$scope.formData = {};
	$req.g($scope.mod,'getOne',{id:$stateParams.id}).success(function(responce){
		$scope.formData = responce;
	});
	$scope.subForm = function(){
		var params = $scope.formData;
 
		$req.FH($scope.mod,'rsave',params);
	}
});
app.controller('welcome', function($scope,$req,$timeout,$stateParams) {
});
app.controller('dongtaiArcs', function($scope,$req,$timeout,$stateParams) {
	$scope.mod = 'Dongtai';
	$scope.title = '文档管理'; 
	$scope.actions = [
		{
			html : '<a href="#/dongtai/detail/'+$stateParams.catalog_id+'/0" class="btn btn-sm green"> 添加公司动态  <i class="fa fa-plus"></i> </a>',
		}
	];
	$scope.columns = [
		{
			selectid:'id',
			width:'30px'
		},
		{
			title:'标题',
			html:'{{title}}',
			width:'200px',
			search:{
				'type':'text',
				'mode':'like',
				'title':'请输入标题',
				'field':'title'
			}
		},
		{
			title:'年份',
			html:'{{year}}',
			width:'200px',
			search:{
				'type':'text',
				'mode':'like',
				'title':'请输入年份',
				'field':'year'
			}
		},
 
		{
			title:'时间',
			html:'{{cdate*1000|date:"yyyy年MM月dd日 HH:mm:ss"}}',
			width:'120px',
			search:{
				'type':'betweendate',
				'minTitle':'起始时间',
				'maxTitle':'截止时间',
				'field':'cdate'
			}
		},
		{
			title:'操作',
			width:'60px',
			html:'<a href="#/dongtai/detail/'+$stateParams.catalog_id+'/{{id}}" class="btn btn-xs default"><i class="fa fa-search"></i> 编辑</a>',
			search:'operation'
		}
	];
});
app.controller('dongtaiDetail', function($scope,$req,$timeout,$stateParams) {
 
	$scope.mod = 'Dongtai';
	$scope.txtMode = $stateParams.id==0?'添加事记':'事记编辑';
	$scope.formData = {};
	$req.g($scope.mod,'getOne',{id:$stateParams.id}).success(function(responce){
		$scope.formData = responce;
	});
	$scope.subForm = function(){
		var params = $scope.formData;
 
		$req.FH($scope.mod,'rsave',params);
	}
});
app.controller('leadersArcs', function($scope,$req,$timeout,$stateParams) {
	$scope.mod = 'Leaders';
	$scope.oper = {
		'delete':'删除',
		'copy':'复制'
	};
	$scope.title = '文档管理';
	$scope.actions = [
		{
			html : '<a href="#/leaders/detail/'+$stateParams.id+'/0" class="btn btn-sm green"> 添加领导班子  <i class="fa fa-plus"></i> </a>',
		}
	];
	$scope.columns = [
		{
			selectid:'id',
			width:'30px'
		},
		{
			title:'缩略图',
			html:'<a href="{{thumb}}" target="_blank"><img src="{{thumb}}" style="max-height:100px"/></a>',
			width:'100px'
		},
		{
			title:'标题',
			html:'{{title}}',
			search:{
				'type':'text',
				'mode':'like',
				'title':'请输入标题',
				'field':'title',
				search:{
					'type':'text',
					'mode':'like',
					'title':'请输入标题',
					'field':'title'
				}
			}
 
		},
		{
			title:'职位',
			html:'{{intro}}',
			width:'140px',
			search:{
				'type':'text',
				'mode':'like',
				'title':'请输入职位',
				'field':'year',
				search:{
					'type':'text',
					'mode':'like',
					'title':'请输入职位',
					'field':'intro'
				}
			}
		},
		 
		{
			title:'时间',
			html:'{{cdate*1000|date:"yyyy年mm月dd日 HH:mm:ss"}}',
			width:'160px',
			search:{
				'type':'betweendate',
				'mode':'like',
				field:'cdate',
				'minTitle':'起始时间',
				'maxTitle':'结束时间'
			}
		},
		{
			title:'操作',
			width:'60px',
			html:'<a href="#/leaders/detail/'+$stateParams.id+'/	{{id}}" class="btn btn-xs default"><i class="fa fa-search"></i> 编辑</a>',
			search:'operation'
		}
	];
});
app.controller('leadersDetail', function($scope,$req,$timeout,$stateParams) {
	$scope.mod = 'Leaders';
	$scope.txtMode = $stateParams.id==0?'领导添加':'领导编辑';
	$scope.formData = {};
	$req.g($scope.mod,'getOne',{id:$stateParams.id}).success(function(responce){
		$scope.formData = responce;
	});
	$scope.subForm = function(){
		var params = $scope.formData;
 
		$req.FH($scope.mod,'rsave',params);
	}
});
//栏目- 单页
app.controller('catalogs_single', function($scope,$req,$timeout,$stateParams) {
	$scope.mod = 'Catalogs';
	$req.p($scope.mod,'getOne',{id:$stateParams.id}).success(function(responce){
		$scope.formData = responce;
	});
	 
	$scope.subForm = function(){
		var params = $scope.formData;
		cl(params);
	 
		$req.FH($scope.mod,'rsave',params);
	}
});
app.controller('arcsDetail', function($scope,$req,$timeout,$stateParams,$staticData) {
	$scope.mod = 'Arcs';
	$scope.pushData = $staticData.getKV('Pushs','id','name');
	$scope.usersGroupData = $staticData.getKV('UsersGroup','id','name');
	$scope.txtMode = $stateParams.id==0?'文档添加':'文档编辑';
	$scope.formData = {};
	
	$req.g('Arcs','getOne',{id:$stateParams.id}).success(function(responce){
		$scope.formData = responce;
		cl(responce);
		if(!$scope.formData['catalog_id'])$scope.formData['catalog_id']  = $stateParams.catalog_id;
	});
	$scope.subForm = function(){
		var params = $scope.formData;
 
		$req.FH($scope.mod,'rsave',params);
	}
});
app.controller('videosDetail', function($scope,$req,$timeout,$stateParams) {
	$scope.mod = 'Arcs';
	 
	$scope.txtMode = $stateParams.id==0?'文档添加':'文档编辑';
	$scope.formData = {};
	
	$req.g('Arcs','getOne',{id:$stateParams.id}).success(function(responce){
		$scope.formData = responce;
		if(!$scope.formData['catalog_id'])$scope.formData['catalog_id']  = $stateParams.catalog_id;
	});
	$scope.subForm = function(){
		var params = $scope.formData;
 
		$req.FH($scope.mod,'rsave',params);
	}
});
app.controller('videosDetail', function($scope,$req,$timeout,$stateParams) {
	$scope.mod = 'Videos';
	$scope.title = '文档管理';
 
	$scope.oper = {
		'delete':'删除',
		'copy':'复制'
	};
	$scope.postparams = {'catalog_id':$stateParams.id};
	$scope.actions = [
		{
			html : '<a href="#/videos/detail/'+$stateParams.id+'/0" class="btn btn-sm green"> 添加1  <i class="fa fa-plus"></i> </a>',
		}
	];
	$scope.columns = [
		{
			selectid:'id',
			width:'30px'
		},
		{
			title:'缩略图',
			html:'<a href="{{thumb}}" target="_blank"><img src="{{thumb}}" style="max-height:50px"/></a>',
			width:'100px'
		},
		{
			title:'标题',
			html:'{{title}}',
			width:'200px'
		},
		{
			title:'描述',
			html:'{{intro}}'
		},
		{
			title:'时间',
			html:'{{cdate*1000|date:"yyyy年mm月dd日 HH:mm:ss"}}',
			width:'120px'
		},
		{
			title:'操作',
			width:'60px',
			html:'<a href="#/arcs/detail/'+$stateParams.id+'/	{{id}}" class="btn btn-xs default"><i class="fa fa-search"></i> 编辑</a>',
			search:'operation'
		}
	];
});
app.controller('pushsPush',function($scope,$stateParams,$req,$staticData){
	$scope.mod = 'Pushs';
	$scope.pushData = $staticData.getKV('Pushs','id','name');
	$scope.usersGroupData = $staticData.getKV('UsersGroup','id','name');
	 
	$scope.txtMode = $stateParams.id==0?'文档推送':'文档推送';
	$scope.arcData = {};
	//文档列表
	$req.g('Arcs','getList',{field:'title,id,intro',ids:$stateParams.id}).success(function(responce){
		$scope.arcData = responce['data'];
	});
	$scope.formData = {};  
	$scope.arcDataRemove = function(id){
		var arcData =$scope.arcData;
		$scope.arcData = {};
		for(var i in arcData){
			var v = arcData[i];
			if(v.id != id) $scope.arcData[i] = v;
		} 
	}
	$scope.subForm = function(){
		var ids = [];
		for(var i in $scope.arcData){
			ids.push($scope.arcData[i]['id']);
		}
		 
		var params = $scope.formData;
		params['ids'] = ids.toString(); 
		$req.FH('Pushs','push',params);
	}
});
app.controller('catalogs_arcs45',function($scope){ 
})
app.controller('pushsData', function($scope,$req,$timeout,$stateParams,$staticData) {
	$scope.mod = 'Arcs';
	$scope.title = '推送内容管理';

	$scope.oper = { 
		'unpush':'取消推送',
	}; 
	$scope.postparams = {'pushdata':1};
	$scope.actions = [
		{
			html : '<a href="#/arcs/detail/'+$stateParams.id+'/0" class="btn btn-sm green"> 添加文档  <i class="fa fa-plus"></i> </a>',
		}
	];
	$scope.columns = [
		{
			selectid:'id',
			width:'30px'
		},
		{
			title:'缩略图',
			html:'<a href="{{thumb}}" target="_blank"><img src="{{thumb}}" style="max-height:50px"/></a>',
			width:'100px'
		},
		{
			title:'标题',
			html:'{{title}}',
			width:'200px',
			search:{
				type:'text',
				mode:'like',
				field:'title',
				title:'请输入标题'
			}
		},
		{
			title:'来源栏目',
			html:'{{catalog_id|staticValue:"Catalogs":"id":"title"}}',
			width:'200px',
			search:{
				type:'select',
				field:'catalog_id',
				data:$staticData.getKV('Catalogs','id','title'),
				title:'请选择', 
			}
		},
		{
			title:'描述',
			html:'{{intro}}',
			search:{
				type:'text',
				mode:'like',
				field:'intro',
				title:'请输入简介'
			}
		},
		
		{
			title:'时间',
			html:'{{cdate*1000|date:"yyyy年mm月dd日 HH:mm:ss"}}',
			width:'120px',
			search:{
				type:'betweendate',
				field:'cdate',
				minTitle:'起始时间',
				maxTitle:'结束时间'
			}
		},
		{
			title:'推送位',
			html:'{{push_id|staticValue:"Pushs"}}',
			search:{
				type:'select',
				field:'push_id',
				data:$staticData.getKV('Pushs','id','name'),
				title:'请选择',
				mode:'find_in_set'
			}
		},
		{
			title:'推送用户组',
			html:'{{push_group|staticValue:"UsersGroup"}}',
			search:{
				type:'select',
				field:'push_group',
				data:$staticData.getKV('UsersGroup','id','name'),
				title:'请选择',
				mode:'find_in_set'
			}
		},
		{
			title:'推送时间',
			html:'{{pushdate>0?(pushdate*1000|date:"yyyy年MM月d日 HH:mm:ss"):""}}'
		},
		{
			title:'操作',
			width:'60px',
			html:'<a href="#/arcs/detail/'+$stateParams.id+'/	{{id}}" class="btn btn-xs default"><i class="fa fa-search"></i> 编辑</a>',
			search:'operation'
		}
	];
});
app.controller('catalogs_arcs', function($scope,$req,$timeout,$stateParams,$staticData) {
	$scope.mod = 'Arcs';
	$scope.title = '文档管理';

	$scope.oper = {
		'delete':'删除',
		'copy':'复制',
		'push':'推送',
	}; 
	$scope.postparams = {'catalog_id':$stateParams.id};
	$scope.actions = [
		{
			html : '<a href="#/arcs/detail/'+$stateParams.id+'/0" class="btn btn-sm green"> 添加文档  <i class="fa fa-plus"></i> </a>',
		}
	];
	$scope.columns = [
		{
			selectid:'id',
			width:'30px'
		},
		{
			title:'缩略图',
			html:'<a href="{{thumb}}" target="_blank"><img src="{{thumb}}" style="max-height:50px"/></a>',
			width:'100px'
		},
		{
			title:'标题',
			html:'{{title}}',
			width:'200px',
			search:{
				type:'text',
				mode:'like',
				field:'title',
				title:'请输入标题'
			}
		},
		{
			title:'描述',
			html:'{{intro}}',
			search:{
				type:'text',
				mode:'like',
				field:'intro',
				title:'请输入简介'
			}
		},
		
		{
			title:'时间',
			html:'{{cdate*1000|date:"yyyy年mm月dd日 HH:mm:ss"}}',
			width:'120px',
			search:{
				type:'betweendate',
				field:'cdate',
				minTitle:'起始时间',
				maxTitle:'结束时间'
			}
		},
		{
			title:'推送位',
			html:'{{push_id|staticValue:"Pushs"}}',
			search:{
				type:'select',
				field:'push_id',
				data:$staticData.getKV('Pushs','id','name'),
				title:'请选择',
				mode:'find_in_set'
			}
		},
		{
			title:'推送用户组',
			html:'{{push_group|staticValue:"UsersGroup"}}',
			search:{
				type:'select',
				field:'push_group',
				data:$staticData.getKV('UsersGroup','id','name'),
				title:'请选择',
				mode:'find_in_set'
			}
		},
		{
			title:'推送时间',
			html:'{{pushdate>0?(pushdate*1000|date:"yyyy年MM月d日 HH:mm:ss"):""}}'
		},
		{
			title:'操作',
			width:'60px',
			html:'<a href="#/arcs/detail/'+$stateParams.id+'/	{{id}}" class="btn btn-xs default"><i class="fa fa-search"></i> 编辑</a>',
			search:'operation'
		}
	];
});
//参数配置
app.controller('config', function($scope,$req,$timeout) {
	$scope.mod = 'Config';
	$scope.title = '参数配置';
	alert(123);
	$req.p($scope.mod,'getOne',{id:3}).success(function(responce){
		$scope.formData = responce;
 		
	});
	 
	$scope.subForm = function(){
		var params = $scope.formData;
 
		$req.FH($scope.mod,'rsave',params);
	}
});
app.controller('msgbox', function($scope,$req,$stateParams) {
	$scope.back = function(){
		history.back();
	}
	$scope.reload = function(){
		$("[data-dismiss='modal']").trigger('click');
	}
});