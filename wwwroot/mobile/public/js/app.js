
var app = angular.module("app", [
	'ui.router'
]); 
function getView(tpl){ 
	return "main.php/"+LANG+"/"+tpl;
}
function cl(msg){
	console.log(msg);
}
function setYyright(){
	setTimeout(function(){
		yyright();
	},200);
} 
app.filter('trusted', ['$sce', function ($sce) {  
        return function (text) {  
            return $sce.trustAsHtml(text);  
        }  
    }]  
)  
function subString(str, len, start)  
{  
    var newLength = 0;  
    var newStr = "";  
    var chineseRegex = /[^\x00-\xff]/g;  
    var singleChar = "";
    var start = start ? start/2 : 0; 
    var strLength = str.replace(chineseRegex,"**").length;
    len += start;
    for(var i = 0;i < strLength;i++)  
    {  
    	if(start>i){
    		continue;
    	}
        singleChar = str.charAt(i).toString();  
        if(singleChar.match(chineseRegex) != null)  
        {  
            newLength += 2;  
        }      
        else  
        {  
            newLength++;  
        }  
        if(newLength > len)  
        {  
            break;  
        }  
        newStr += singleChar;  
    }  

     
    return newStr;  
}
app.filter('substr',function(){
	return function(str, len, start){  
		return subString(str, len, start);
	}
});
app.factory('$req',function($http){
	
	return {
		g: function(m,a,p){
			return $http({
				url : 'main.php?c=Data&a=g' + "&_m="+m+"&_a="+a,
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
		s: function(m,a,p){
			return $http({
				url : 'main.php?c=Data&a=s' + "&_m="+m+"&_a="+a,
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
		
	}
});
app.factory('$langs',function($req,$rootScope){
	var langs = {};
	return{
		init : function(){
			$req.g('Langs','g',{}).success(function(responce){
				langs = responce;
			});
		},
		g:function(key){
			return langs[$rootScope.lang][key];
		}
	}
});
function makeTree(data,id,result){
	result = result&&result.length ? result : [];
 	 

	for(var i in data){
		if(parseInt(i) == parseInt(id)){
			result.push(i);
			if(data[i]>0){
				var a = makeTree(data,data[i]);
				for(var aa in a){
					result.push(a[aa]);
				}
			}
		}
	} 
	return result;
} 
app.factory('$catalogs',function($req){ 
	return {
		getRelation : function(){ 
			return catalogsRelation;
		}
		 
	}
});
app.filter('lang',function($langs){
	return function(k){
		var v = $langs.g(k);
		return v;
	}
})
/* ROUTE */

app.config(['$stateProvider', '$urlRouterProvider',function($stateProvider, $urlRouterProvider) { 
    $stateProvider
    .state('index', {
        url: "/{lang:[a-zA-Z]{1,4}}/index",
        templateUrl: getView("index"),
        controller: "index",
    }) 
    .state('catalog', {
        url: "/{lang:[a-zA-Z]{1,4}}/catalog/{catalog_id:[0-9]{1,4}}",
        templateUrl:function($stateParams){
        	return getView("catalog/"+$stateParams.catalog_id);
        },
        controller: "index",
    }) 
    ;
    //$langs.init();
}]);
app.run(function($langs,$rootScope,$catalogs){
	$rootScope.lang = 'zh';
	$langs.init(); 
});
app.filter('filterHtml',function($langs){
	return function(v){
		return delHtmlTag(v);
	}
})
function delHtmlTag(str)
{
return str.replace(/<[^>]+>/g,"");//去掉所有的html标记
}

/* CONTROLLER */

