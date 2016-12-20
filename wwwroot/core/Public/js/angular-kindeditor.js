/**
 * @license AngularJS v1.2.9
 * (c) 2010-2014 Google, Inc. http://angularjs.org
 * License: MIT
 * Created by Zed on 19-11-2014.
 */
(function () {
    'use strict';

    angular
        .module('ngKeditor', [])
        .directive('keditor', function ($rootScope,$sce) {

            var linkFn = function (scope, elm, attr, ctrl) {

                if (typeof window.KindEditor === 'undefined') {
                    throw new Error('Please import the local resources of kindeditor!');
                }
 
                var editor,
                    editorId = elm[0],
                    _config = {
                        width: '100%',
						height:'500px',
                        autoHeightMode: false,
                        afterCreate: function () {
                            this.loadPlugin('autoheight');
                        },
                        afterChange: function () {
	 
                            if (isReady && editor) {
								
								elm.html(this.html());
								elm.trigger('change');
								
                            }
                        },
						cssPath:'/public//css/style_cn.css',
						filterMode:false,
						cssData:'body{background-color:#FFFFFF;background-image: url("");}',
                    },
                    isReady = false,
                    editorConfig = angular.extend(_config, scope.config);
				 
                editor = new KindEditor.create(editorId, editorConfig);
				isReady = true;
                KindEditor.ready(function () {
                    isReady = true;
					
 
                });
				var _content;
					 
				ctrl.$render = function() {
					_content = (ctrl.$isEmpty(ctrl.$viewValue) ? "" : ctrl.$viewValue);
 
					editor.html(_content);
				};

                // ∆•≈‰’˝‘Ú
                var regObj = scope.pattern ? new RegExp(scope.pattern) : false;
                if (regObj) {
 
                    ctrl.$parsers.push(function (value) {
                        if (regObj.test(value)) {
                            ctrl.$setValidity(attr.ngModel,true)
                        } else {
                            ctrl.$setValidity(attr.ngModel,false)
                        }

                    })
                }

            };
			 
            return {
                restrict: 'AC',
                require: '^ngModel',
                scope: {
                    config: '=',
                    pattern: '=',
					content: '='
                },
                link: linkFn,
				 
            };
        });
}).call(this);