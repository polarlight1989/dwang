<?php if (!defined('THINK_PATH')) exit();?><!-- BEGIN HEADER INNER -->
<div class="page-header-inner">
    <!-- BEGIN LOGO -->
    <div class="page-logo">
        <a ui-sref="dashboard">
            <img src="{{settings.layoutPath}}/img/logo.png" alt="logo" class="logo-default" /> </a>

    </div>
    <!-- END LOGO -->
    <!-- BEGIN HEADER SEARCH BOX -->
    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
    <form class="search-form hide" action="#" method="GET">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="query">
            <span class="input-group-btn">
                <a href="javascript:;" class="btn submit">
                    <i class="icon-magnifier"></i>
                </a>
            </span>
        </div>
    </form>
    <!-- END HEADER SEARCH BOX -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        <span></span>
    </a>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			<li class="dropdown dropdown-user">
				<a href="#" class="dropdown-toggle hover-initialized" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-haspopup="true" aria-expanded="false">
				<img alt="" class="img-circle" src="/Public/images/avatar.jpg">
				<span class="username username-hide-on-mobile"> Admin </span>
				 
				</a>
				 
			</li>
            <li class="dropdown dropdown-quick-sidebar-toggler">
                <a href="<?php echo U('loginout');?>" class="dropdown-toggle">
                    <i class="icon-logout"></i>
                </a>
            </li>
            <!-- END QUICK SIDEBAR TOGGLER -->
        </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
</div>
<!-- END HEADER INNER -->