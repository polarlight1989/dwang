<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]>
  <html lang="en" class="ie8 no-js" data-ng-app="MetronicApp">
  <![endif]-->
  <!--[if IE 9]>
    <html lang="en" class="ie9 no-js" data-ng-app="MetronicApp">
    <![endif]-->
    <!--[if !IE]><!-->
      <html lang="en" data-ng-app="MetronicApp" ng-controller='html'>
      <!--<![endif]-->
      <!-- BEGIN HEAD -->
      
      <head>
        <title data-ng-bind="'<?php echo ($cmsname); ?> | ' + $state.current.data.pageTitle"></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN DYMANICLY LOADED CSS FILES(all plugin and page related styles must be loaded between GLOBAL and THEME css files ) -->
        <link id="ng_load_plugins_before" />
        <!-- END DYMANICLY LOADED CSS FILES -->
        <!-- BEGIN THEME STYLES -->
        <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
        <link href="<?php echo ($ANGULAR_URL); ?>assets/global/css/components.min.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="<?php echo ($ANGULAR_URL); ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo ($ANGULAR_URL); ?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo ($ANGULAR_URL); ?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" ng-if="alang == 'zh'" />
        <link href="<?php echo ($ANGULAR_URL); ?>assets/layouts/layout/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" ng-if="alang == 'en'" />
        <link href="<?php echo ($ANGULAR_URL); ?>assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
		
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
		<script>
		var LANG = ALANG = '<?php echo ($ALANG); ?>';
		var ANGULAR_URL = '<?php echo ($ANGULAR_URL); ?>';
		function viewurl(tpl) {
			return "<?php echo ($TPL_URL); ?>" + tpl;
		}
		</script>
		</head>
		
      <body ng-controller="AppController" class="page-header-fixed page-sidebar-closed-hide-logo " ng-class="{'page-content-white': settings.layout.pageContentWhite,'page-container-bg-solid': settings.layout.pageBodySolid, 'page-sidebar-closed': settings.layout.pageSidebarClosed}">
	  <!-- BEGIN PAGE SPINNER -->
        
        <!-- END PAGE SPINNER -->
        <!-- BEGIN HEADER -->
        <div data-ng-include="'<?php echo ($TPL_URL); ?>tools.header'" data-ng-controller="HeaderController" class="page-header navbar navbar-fixed-top"> </div>
        <!-- END HEADER -->
        <div class="clearfix"> </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div data-ng-include="'<?php echo ($TPL_URL); ?>tools.sidebar'" data-ng-controller="SidebarController" class="page-sidebar-wrapper"> </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
			
            <div class="page-content-wrapper">
                <div class="page-content">

                    <!--<div data-ng-include="'<?php echo ($TPL_URL); ?>tools.theme-panel'" data-ng-controller="ThemePanelController" class="theme-panel hidden-xs hidden-sm"> </div>-->

                   
                    <div ui-view class="fade-in-up"> </div>
                    
                </div>
            </div>
			
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
             <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->

        <!-- END FOOTER -->
        <!-- BEGIN QUICK NAV -->
        
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE JQUERY PLUGINS -->
        <!--[if lt IE 9]>
          <script src="../assets/global/plugins/respond.min.js"></script>
          <script src="../assets/global/plugins/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE JQUERY PLUGINS -->
        <!-- BEGIN CORE ANGULARJS PLUGINS -->
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/angularjs/angular.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/angularjs/angular-sanitize.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/angularjs/angular-touch.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/angularjs/plugins/angular-ui-router.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/angularjs/plugins/ocLazyLoad.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/angularjs/plugins/ui-bootstrap-tpls.min.js" type="text/javascript"></script>
        <!-- END CORE ANGULARJS PLUGINS -->
        <!-- BEGIN APP LEVEL ANGULARJS SCRIPTS -->
        <script src="<?php echo ($ANGULAR_URL); ?>js/main.js" type="text/javascript"></script>
		<script src="<?php echo ($ANGULAR_URL); ?>js/controller.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>js/directives.js" type="text/javascript"></script>
        <!-- END APP LEVEL ANGULARJS SCRIPTS -->
        <!-- BEGIN APP LEVEL JQUERY SCRIPTS -->
        <script src="<?php echo ($ANGULAR_URL); ?>js/app.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
		<script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
		<link href="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
		<!--
		<script type="text/javascript" src="<?php echo ($PUBLIC_URL); ?>js/ueditor/ueditor.config.js"></script>
		<script type="text/javascript" src="<?php echo ($PUBLIC_URL); ?>js/ueditor/ueditor.all.js"></script>
		<script type="text/javascript" src="<?php echo ($PUBLIC_URL); ?>js/angular-ueditor.js"></script>
		-->
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/fileupload/jquery.ui.widget.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/fileupload/jquery.iframe-transport.js" type="text/javascript"></script>
        <script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/fileupload/jquery.fileupload.js" type="text/javascript"></script>

		<script type="text/javascript" src="<?php echo ($PUBLIC_URL); ?>js/kindeditor/kindeditor-min.js"></script>
		<script type="text/javascript" src="<?php echo ($PUBLIC_URL); ?>js/angular-kindeditor.js"></script>
		<!-- ng-image-upload 
		<link href="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
        -->
        <!-- END APP LEVEL JQUERY SCRIPTS -->
		<link href="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/dropzone/basic.min.css" rel="stylesheet" type="text/css" />
		<script src="<?php echo ($ANGULAR_URL); ?>assets/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
		
        <!-- END JAVASCRIPTS -->
		<div id="msgbox" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" ng-controller='msgbox'>
		<div class="modal-dialog">
			<div class="modal-content" id='modalcontent'>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">提示</h4>
				</div>
				<div class="modal-body">
					<p id='msgcontent' style='font-size:18px;'>
						
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" mbtn='close' class="btn default">关闭</button>
					<button type="button" data-dismiss="modal" mbtn='back' ng-click='back()' class="btn btn-primary">返回</button>
					<button type="button" data-dismiss="modal" mbtn='goon' ng-click="reload()" class="btn green">继续</button>
				</div>
			</div>
		</div>
	</div>
	 
		</body>
      
      </html>