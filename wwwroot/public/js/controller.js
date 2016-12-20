app.filter('substr',function(){
	var f = function subString(str, len,start, hasDot) {
            var newLength = 0;
            var newStr = "";
            var chineseRegex = /[^\x00-\xff]/g;
            var singleChar = "";
            var start = start ? start/2 : 0;
             
            var strLength = str.replace(chineseRegex, "**").length;
            for (var i = start; i < strLength; i++) {
                singleChar = str.charAt(i).toString();
                if (singleChar.match(chineseRegex) != null) {
                    newLength += 2;
                }
                else {
                    newLength++;
                }
                if (newLength > len) {
                    break;
                }
                newStr += singleChar;
            }


            if (hasDot && strLength > len) {
                newStr += "...";
            }
            return newStr;
        }
	return function(str,len,start,hasDot){
		return f(str,len,start,hasDot);
	}
});
app.controller('index',function($scope,$req,$rootScope,$timeout){

	$scope.list4 = {};
	$req.p('Arcs','ajaxTable',{catalog_id:43,length:4,fields:'title,cdate,thumb,id'}).success(function(responce){
		$scope.list4 = responce;
		$timeout(function(){
			yyright();
		},200)
	});
})