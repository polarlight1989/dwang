var app = angular.module('app',[
	"ui.router",
]);
app.factory('$req',function($http,$rootScope){
	
	return {
		g: function(m,a,p){
			p['lang'] = $rootScope.LANG;
			return $http({
				url : '?m=Admin&c=Data&a=g' + "&_m="+m+"&_a="+a,
				method : 'GET',
				headers: {'Content-Type':'application/x-www-form-urlencoded'},
				params : p
			});
		},
		p: function(m,a,p){
			p['lang'] = $rootScope.LANG;
			return $http({
				url : '?m=Admin&c=Data&a=p' + "&_m="+m+"&_a="+a,
				method : 'POST',
				headers: {'Content-Type':'application/x-www-form-urlencoded'},
				data : p
			});
		},
		s: function(m,a,p){
			p['lang'] = $rootScope.LANG;
			return $http({
				url : '?m=Admin&c=Data&a=s' + "&_m="+m+"&_a="+a,
				method : 'POST',
				headers: {'Content-Type':'application/x-www-form-urlencoded'},
				transformRequest : function(obj){
					var str = [];
					for(var p in obj){
						str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
					}
					return str.join('&');
				},
				params : p
			});
		},
		//自动表单处理
		FH: function(m,a,p){
			p['lang'] = $rootScope.LANG;
			$http({
				url : '?m=Manager&c=Data&a=s' + "&_m="+m+"&_a="+a,
				method : 'POST',
				data: p,
				headers : { 'Content-Type': 'application/x-www-form-urlencoded' },
				transformRequest : function(obj){
					var str = [];
					for(var p in obj){
						str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
					}
				 
					return str.join('&');
				},
	 
			}).success(function(responce){
				FH(responce);
			});
		},
	}
});
function cl(msg){
	console.log(msg);
}

app.run(function($req,$rootScope){
	$rootScope.catalogs = {};
	$rootScope.LANG = 'zh';
	$rootScope.langsData = langsData;
	$rootScope.catalogs = catalogsData;
 
});
function viewurl(tpl) {
    return "/index.php?m=Home&c=Index&a=view&tpl=" + tpl;
}
app.config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {

	$urlRouterProvider.otherwise('/');
	$stateProvider
		.state('index', {
			url: '/',
            templateUrl: viewurl('index.index'),
            controller: 'index'
		});

}]);
//语言
app.filter('lang',function($rootScope,$req){
	var lang = $rootScope.LANG;
	var langData = $rootScope.langsData;
	return function(id){ 
		return langData[lang][id];
	}
});

//controller
app.controller('header',function($scope,$rootScope){ 
	$scope.catalogs = $rootScope.catalogs;
});