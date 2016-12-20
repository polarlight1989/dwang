app.directive('mbx',function(){
	return {
		restrict : 'E',
		replace:true,
		template:'<div class="mbx"><a href=\'#/{{LANG}}/catalog/{{v.id}}\' ng-repeat="v in data">{{v.title}}<i ng-if="v.last!=1"></i></a></div>',
		scope:{
			id : '@',
		},
		controller : function($scope,$element,$catalogs,$filter){
			$scope.LANG = LANG;
			var relation = $catalogs.getRelation(); 
			if($scope.id){
				var tree = makeTree(relation,$scope.id);
				tree.reverse();
				$scope.data = {};
				var html = "";
				var row = 0; 
				for(var i in tree){
					
					var v = tree[i];
					var title = $filter('lang')('catalog_'+v);
					$scope.data[row] = {'id':v,'title':title};
					if(row+1==tree.length) $scope.data[row]['last'] = 1;
					row++;
				}
			}
			 
		},
	}
});
app.filter('arcurl',function(){
	return function(aid,catalogid){
		return "#/"+LANG+"/arc/"+catalogid+"/"+aid;
	}
});

app.controller('index',function($scope,$req){ 
	var params = {
		'catalog_id':43,
		'fields': 'id,title,thumb',
		'length':2,
	}
	$scope.list = {};
	$req.g('Arcs','ajaxTable',params).success(function(responce){ 
 		$scope.list = responce['data'];
	});
	var params2 = {
		'catalog_id':52,
		'fields': 'id,title',
		'length':3,
	}
	$scope.gsdt = {};
	$req.g('Arcs','ajaxTable',params2).success(function(responce){ 
 		$scope.gsdt = responce['data'];
	});
	setYyright();
});

app.controller('leaders',function($scope,$req){
	$scope.data = {};
	var params = {
		'catalog_id':26,
		'fields': 'id,title,thumb,intro,content',
		'length':50,
	}
	$req.g('Leaders','ajaxTable',params).success(function(responce){
		$scope.data = responce;
	});
});

app.controller('single',function($scope,$req,$stateParams,$timeout){
	var params = {
		id :$stateParams.catalog_id,
		fields:'id,title,content',
	}
	$scope.catalog_id = $stateParams.id; 
	$scope.data = {};
	$req.g('Catalogs','getOne',params).success(function(responce){
		$scope.data = responce;
	});
});
app.controller('thumbarcs',function($scope,$stateParams,$req){
	var params = {
		'catalog_id':$stateParams.catalog_id,
		'fields': 'id,title,thumb,intro,content',
		'length':50,
	}
	$scope.data = {};
	$req.g('Arcs','getList',params).success(function(responce){
		$scope.data = responce;
	});
})