<?php
	include("assets/dbconnect.php");
	// include("function.php");
?>
<!DOCTYPE html>
<!-- saved from url=(0090)http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/datatables.html -->
<html lang="en-us" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<title>Data Tables</title>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

		<!-- DEV links : turn this on when you like to develop directly -->
		<!--<link rel="stylesheet" type="text/css" media="screen" href="../Source_UNMINIFIED_CSS/smartadmin-production.css">-->
		<!--<link rel="stylesheet" type="text/css" media="screen" href="../Source_UNMINIFIED_CSS/smartadmin-skins.css">-->

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

		<!-- #FAVICONS -->
		<link rel="shortcut icon" href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/img/favicon/favicon.ico" type="image/x-icon">

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="css/css">

		<!-- #APP SCREEN / ICONS -->
		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/img/splash/touch-icon-ipad-retina.png">

		<!-- Load otomatis -->
		<script src="assets/js/jquery-1.10.2.min.js"></script>
		<script>
		var refreshId = setInterval(function()
		{
		$('#responsecontainer').load('show.php');
		}, 1000);
		</script>
		<!-- Load otomatis -->
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/img/splash/iphone.png" media="screen and (max-device-width: 320px)">

	<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

	<!--

	TABLE OF CONTENTS.
	
	Use search to find needed section.
	
	===================================================================
	
	|  01. #CSS Links                |  all CSS links and file paths  |
	|  02. #FAVICONS                 |  Favicon links and file paths  |
	|  03. #GOOGLE FONT              |  Google font link              |
	|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
	|  05. #BODY                     |  body tag                      |
	|  06. #HEADER                   |  header tag                    |
	|  07. #PROJECTS                 |  project lists                 |
	|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
	|  09. #MOBILE                   |  mobile view dropdown          |
	|  10. #SEARCH                   |  search field                  |
	|  11. #NAVIGATION               |  left panel & navigation       |
	|  12. #MAIN PANEL               |  main panel                    |
	|  13. #MAIN CONTENT             |  content holder                |
	|  14. #PAGE FOOTER              |  page footer                   |
	|  15. #SHORTCUT AREA            |  dropdown shortcuts area       |
	|  16. #PLUGINS                  |  all scripts and plugins       |
	
	===================================================================
	
	-->
	
	<!-- #BODY -->
	<!-- Possible Classes

		* 'smart-style-{SKIN#}'
		* 'smart-rtl'         - Switch theme mode to RTL
		* 'menu-on-top'       - Switch to top navigation (no DOM change required)
		* 'no-menu'			  - Hides the menu completely
		* 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
		* 'fixed-header'      - Fixes the header
		* 'fixed-navigation'  - Fixes the main menu
		* 'fixed-ribbon'      - Fixes breadcrumb
		* 'fixed-page-footer' - Fixes footer
		* 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
	-->
	<body class="smart-style-0 desktop-detected fixed-header fixed-navigation">

		<!-- #HEADER -->
		<header id="header">
			<div id="logo-group">

				<!-- PLACE YOUR LOGO HERE -->
				<span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
				<!-- END LOGO PLACEHOLDER -->

				<!-- Note: The activity badge color changes when clicked and resets the number to 0
					 Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
				<span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge bg-color-red bounceIn animated"> 21 </b> </span>

				<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
				<div class="ajax-dropdown">

					<!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/mail.html">
							Msgs (14) </label>
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/notifications.html">
							notify (3) </label>
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/tasks.html">
							Tasks (4) </label>
					</div>

					<!-- notification content -->
					<div class="ajax-notifications custom-scroll">

						<div class="alert alert-transparent">
							<h4>Click a button to show messages here</h4>
							This blank page message helps protect your privacy, or you can show the first message here automatically.
						</div>

						<i class="fa fa-lock fa-4x fa-border"></i>

					</div>
					<!-- end notification content -->

					<!-- footer: refresh area -->
					<span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="&lt;i class=&#39;fa fa-refresh fa-spin&#39;&gt;&lt;/i&gt; Loading..." class="btn btn-xs btn-default pull-right">
							<i class="fa fa-refresh"></i>
						</button> </span>
					<!-- end footer -->

				</div>
				<!-- END AJAX-DROPDOWN -->
			</div>

			<!-- #PROJECTS: projects dropdown -->
			<div class="project-context hidden-xs">

				<span class="label">Projects:</span>
				<span class="project-selector dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>

				<!-- Suggestion: populate this list with fetch and push technique -->
				<ul class="dropdown-menu">
					<li>
						<a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
					</li>
					<li>
						<a href="javascript:void(0);">Notes on pipeline upgradee</a>
					</li>
					<li>
						<a href="javascript:void(0);">Assesment Report for merchant account</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
					</li>
				</ul>
				<!-- end dropdown-menu-->

			</div>
			<!-- end projects dropdown -->
			
			<!-- #TOGGLE LAYOUT BUTTONS -->
			<!-- pulled right: nav area -->
			<div class="pull-right">
				
				<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
				<!-- end collapse menu -->
				
				<!-- #MOBILE -->
				<!-- Top menu profile link : this shows only when top menu is active -->
				<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
					<li class="">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
							<img src="img/sunny.png" alt="John Doe" class="online">  
						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
							</li>
						</ul>
					</li>
				</ul>

				<!-- logout button -->
				<div id="logout" class="btn-header transparent pull-right">
					<span> <a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
				</div>
				<!-- end logout button -->

				<!-- search mobile button (this is hidden till mobile view port) -->
				<div id="search-mobile" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
				</div>
				<!-- end search mobile button -->
				
				<!-- #SEARCH -->
				<!-- input: search field -->
				<form action="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/search.html" class="header-search pull-right">
					<input id="search-fld" type="text" name="param" placeholder="Find reports and more">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
					<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
				</form>
				<!-- end input: search field -->

				<!-- fullscreen button -->
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
				</div>
				<!-- end fullscreen button -->

				<!-- #Voice Command: Start Speech -->
				<!-- NOTE: Voice command button will only show in browsers that support it. Currently it is hidden under mobile browsers. 
						   You can take off the "hidden-sm" and "hidden-xs" class to display inside mobile browser-->
				<div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
					<div> 
						<a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a> 
						<div class="popover bottom"><div class="arrow"></div>
							<div class="popover-content">
								<h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
								<h4 class="vc-title-error text-center">
									<i class="fa fa-microphone-slash"></i> Voice command failed
									<br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
									<br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
								</h4>
								<a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a> 
								<a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$(&#39;#speech-btn .popover&#39;).fadeOut(50);">Close Popup</a> 
							</div>
						</div>
					</div>
				</div>
				<!-- end voice command -->

				<!-- multiple lang dropdown : find all flags in the flags page -->
				<ul class="header-dropdown-list hidden-xs">
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#" class="dropdown-toggle" data-toggle="dropdown"> <img src="img/blank.gif" class="flag flag-us" alt="United States"> <span> US</span> <i class="fa fa-angle-down"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li class="active">
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-fr" alt="France"> Français</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-jp" alt="Japan"> 日本語</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-cn" alt="China"> 中文</a>
							</li>	
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-it" alt="Italy"> Italiano</a>
							</li>	
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-kr" alt="Korea"> 한국어</a>
							</li>						
							
						</ul>
					</li>
				</ul>
				<!-- end multiple lang -->

			</div>
			<!-- end pulled right: nav area -->

		</header>
		<!-- END HEADER -->

		<!-- #NAVIGATION -->
		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS/SASS variables -->
		<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as is --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="img/sunny.png" alt="me" class="online"> 
						<span>
							john.doe 
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive

			To make this navigation dynamic please make sure to link the node
			(the reference to the nav > ul) after page load. Or the navigation
			will not initialize.
			-->
			<nav>
				<!-- 
				NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
				-->

				<ul style="">
					<li class="">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul style="display: none;">
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/dashboard.html" title="Dashboard"><span class="menu-item-parent">Analytics Dashboard</span></a>
							</li>
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/dashboard-social.html" title="Dashboard"><span class="menu-item-parent">Social Wall</span></a>
							</li>
						</ul>	
					</li>
					<li class="">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Outlook</span> <span class="badge pull-right inbox-badge margin-right-13">14</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul style="display: none;">
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/inbox.html">Inbox </a>
							</li>
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/inbox-email-view.html">Email view </a>
							</li>
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/inbox-email-compose.html">Compose </a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/inbox-email-reply.html">Reply </a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/email-template.html">Email Templates </a>
							</li>
						</ul>	
					</li>
					<li class="open active">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span><b class="collapse-sign"><em class="fa fa-minus-square-o"></em></b></a>
						<ul style="display: block;">
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/table.html">Normal Tables</a>
							</li>
							<li class="active">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/datatables.html">Data Tables <span class="badge inbox-badge bg-color-greenLight hidden-mobile">responsive</span></a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/jqgrid.html">Jquery Grid</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-cloud"><em>3</em></i> <span class="menu-item-parent">Cool Features!</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/calendar.html"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Calendar</span></a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">GMap Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
							</li>
						</ul>
					</li>	
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">App Views</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/projects.html"><i class="fa fa-file-text-o"></i> Projects</a>
							</li>	
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/blog.html"><i class="fa fa-paragraph"></i> Blog</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/gallery.html"><i class="fa fa-picture-o"></i> Gallery</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-comments"></i> Forum Layout<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
								<ul>
									<li><a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/forum.html">General View</a></li>
									<li><a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/forum-topic.html">Topic View</a></li>
									<li><a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/forum-post.html">Post View</a></li>
								</ul>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/profile.html"><i class="fa fa-group"></i> Profile</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/timeline.html"><i class="fa fa-clock-o"></i> Timeline</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/search.html"><i class="fa fa-search"></i>  Search Page</a>
							</li>
						</ul>		
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">E-Commerce</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li><a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/orders.html">Orders</a></li>
							<li><a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/products-view.html">Products View</a></li>
							<li><a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/products-detail.html">Products Detail</a></li>
						</ul>
					</li>	
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/Landing_Page/" target="_blank">Landing Page <i class="fa fa-external-link"></i></a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/pricing-table.html">Pricing Tables</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/invoice.html">Invoice</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/login.html" target="_top">Login</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/register.html" target="_top">Register</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/forgotpassword.html" target="_top">Forgot Password</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/lock.html" target="_top">Locked Screen</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/error404.html">Error 404</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/error500.html">Error 500</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/blank_.html">Blank Page</a>
							</li>
						</ul>
					</li>
					<li class="chat-users top-menu-invisible">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-comment-o"><em class="bg-color-pink flash animated">!</em></i> <span class="menu-item-parent">Smart Chat API <sup>beta</sup></span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<!-- DISPLAY USERS -->
								<div class="display-users">

									<input class="form-control chat-user-filter" placeholder="Filter" type="text">
									
								  	<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#" class="usr" data-chat-id="cha1" data-chat-fname="Sadi" data-chat-lname="Orlaf" data-chat-status="busy" data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!" data-chat-alertshow="true" data-rel="popover-hover" data-placement="right" data-html="true" data-content="
											&lt;div class=&#39;usr-card&#39;&gt;
												&lt;img src=&#39;img/avatars/5.png&#39; alt=&#39;Sadi Orlaf&#39;&gt;
												&lt;div class=&#39;usr-card-content&#39;&gt;
													&lt;h3&gt;Sadi Orlaf&lt;/h3&gt;
													&lt;p&gt;Marketing Executive&lt;/p&gt;
												&lt;/div&gt;
											&lt;/div&gt;
										" data-original-title="" title=""> 
									  	<i></i>Sadi Orlaf
								  	</a>
								  
									<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#" class="usr" data-chat-id="cha2" data-chat-fname="Jessica" data-chat-lname="Dolof" data-chat-status="online" data-chat-alertmsg="" data-chat-alertshow="false" data-rel="popover-hover" data-placement="right" data-html="true" data-content="
											&lt;div class=&#39;usr-card&#39;&gt;
												&lt;img src=&#39;img/avatars/1.png&#39; alt=&#39;Jessica Dolof&#39;&gt;
												&lt;div class=&#39;usr-card-content&#39;&gt;
													&lt;h3&gt;Jessica Dolof&lt;/h3&gt;
													&lt;p&gt;Sales Administrator&lt;/p&gt;
												&lt;/div&gt;
											&lt;/div&gt;
										" data-original-title="" title=""> 
									  	<i></i>Jessica Dolof
									</a>
								  
									<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#" class="usr" data-chat-id="cha3" data-chat-fname="Zekarburg" data-chat-lname="Almandalie" data-chat-status="online" data-rel="popover-hover" data-placement="right" data-html="true" data-content="
											&lt;div class=&#39;usr-card&#39;&gt;
												&lt;img src=&#39;img/avatars/3.png&#39; alt=&#39;Zekarburg Almandalie&#39;&gt;
												&lt;div class=&#39;usr-card-content&#39;&gt;
													&lt;h3&gt;Zekarburg Almandalie&lt;/h3&gt;
													&lt;p&gt;Sales Admin&lt;/p&gt;
												&lt;/div&gt;
											&lt;/div&gt;
										" data-original-title="" title=""> 
									  	<i></i>Zekarburg Almandalie
									</a>
								 
									<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#" class="usr" data-chat-id="cha4" data-chat-fname="Barley" data-chat-lname="Krazurkth" data-chat-status="away" data-rel="popover-hover" data-placement="right" data-html="true" data-content="
											&lt;div class=&#39;usr-card&#39;&gt;
												&lt;img src=&#39;img/avatars/4.png&#39; alt=&#39;Barley Krazurkth&#39;&gt;
												&lt;div class=&#39;usr-card-content&#39;&gt;
													&lt;h3&gt;Barley Krazurkth&lt;/h3&gt;
													&lt;p&gt;Sales Director&lt;/p&gt;
												&lt;/div&gt;
											&lt;/div&gt;
										" data-original-title="" title=""> 
									  	<i></i>Barley Krazurkth
									</a>
								  
									<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#" class="usr offline" data-chat-id="cha5" data-chat-fname="Farhana" data-chat-lname="Amrin" data-chat-status="incognito" data-rel="popover-hover" data-placement="right" data-html="true" data-content="
											&lt;div class=&#39;usr-card&#39;&gt;
												&lt;img src=&#39;img/avatars/female.png&#39; alt=&#39;Farhana Amrin&#39;&gt;
												&lt;div class=&#39;usr-card-content&#39;&gt;
													&lt;h3&gt;Farhana Amrin&lt;/h3&gt;
													&lt;p&gt;Support Admin &lt;small&gt;&lt;i class=&#39;fa fa-music&#39;&gt;&lt;/i&gt; Playing Beethoven Classics&lt;/small&gt;&lt;/p&gt;
												&lt;/div&gt;
											&lt;/div&gt;
										" data-original-title="" title=""> 
									  	<i></i>Farhana Amrin (offline)
									</a>
								  
									<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#" class="usr offline" data-chat-id="cha6" data-chat-fname="Lezley" data-chat-lname="Jacob" data-chat-status="incognito" data-rel="popover-hover" data-placement="right" data-html="true" data-content="
											&lt;div class=&#39;usr-card&#39;&gt;
												&lt;img src=&#39;img/avatars/male.png&#39; alt=&#39;Lezley Jacob&#39;&gt;
												&lt;div class=&#39;usr-card-content&#39;&gt;
													&lt;h3&gt;Lezley Jacob&lt;/h3&gt;
													&lt;p&gt;Sales Director&lt;/p&gt;
												&lt;/div&gt;
											&lt;/div&gt;
										" data-original-title="" title=""> 
									  	<i></i>Lezley Jacob (offline)
									</a>
									
									<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/chat.html" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>

								</div>
								<!-- END DISPLAY USERS -->
							</li>
						</ul>	
					</li>
				</ul>
			</nav>
			<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/difver.html" class="btn btn-primary nav-demo-btn"><i class="fa fa-info-circle"></i> SmartAdmin Package (187 MB)</a>
			
			

			<span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

		</aside>
		<!-- END NAVIGATION -->
		
		<!-- #MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh" rel="tooltip" data-placement="bottom" data-original-title="&lt;i class=&#39;text-warning fa fa-warning&#39;&gt;&lt;/i&gt; Warning! This will reset all your widget settings." data-html="true" data-reset-msg="Would you like to RESET all your saved widgets and clear LocalStorage?"><i class="fa fa-refresh"></i></span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb"><li>Home</li><li>Tables</li><li>Data Tables</li></ol>
				<!-- end breadcrumb -->

				<!-- You can also add more buttons to the
				ribbon for further usability

				Example below:

				<span class="ribbon-button-alignment pull-right" style="margin-right:25px">
					<a href="#" id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa fa-grid"></i> Change Grid</a>
					<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa fa-plus"></i> Add</span>
					<button id="search" class="btn btn-ribbon" data-title="search"><i class="fa fa-search"></i> <span class="hidden-mobile">Search</span></button>
				</span> -->

			</div>
			<!-- END RIBBON -->

			<!-- #MAIN CONTENT -->
			<div id="content" style="opacity: 1;"><div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<i class="fa fa-table fa-fw "></i> 
				Table 
			<span>&gt; 
				Data Tables
			</span>
		</h1>
	</div>
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		<ul id="sparks" class="">
			<li class="sparks-info">
				<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
				<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm"><canvas width="89" height="26" style="display: inline-block; width: 89px; height: 26px; vertical-align: top;"></canvas></div>
			</li>
			<li class="sparks-info">
				<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
				<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm"><canvas width="82" height="26" style="display: inline-block; width: 82px; height: 26px; vertical-align: top;"></canvas></div>
			</li>
			<li class="sparks-info">
				<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
				<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm"><canvas width="82" height="26" style="display: inline-block; width: 82px; height: 26px; vertical-align: top;"></canvas></div>
			</li>
		</ul>
	</div>
</div>

<!-- widget grid -->
<section id="widget-grid" class="">

<div class="well well-sm"><form action="" method="get" name="FCari" id="FCari">
		<div class="input-group">
		
			<input name="txtcari" value="<?php echo @$_GET['txtcari']?>" class="form-control input-lg" type="text" id="glyph-search" placeholder="Pencarian Nama Siswa SSB">
			<span class="input-group-addon"><i class="fa fa-fw fa-lg fa-search"></i></span>

			
		</div></form>
	</div>

	<!-- row -->
	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

		<!-- 
  Cari NIM/Nama 
    <input name="txtcari" type="text" id="txtcari"  maxlength="30" value="<?php echo @$_GET['txtcari']?>">
  <input type="submit" name="Submit" value="Cari">
 -->

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" id="wid-id-0" data-widget-editbutton="false" role="widget" data-widget-fullscreenbutton="true">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->
				<header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a></div><div class="widget-toolbar" role="menu"><a data-toggle="dropdown" class="dropdown-toggle color-box selector" href="javascript:void(0);"></a><ul class="dropdown-menu arrow-box-up-right color-select pull-right"><li><span class="bg-color-green" data-widget-setstyle="jarviswidget-color-green" rel="tooltip" data-placement="left" data-original-title="Green Grass"></span></li><li><span class="bg-color-greenDark" data-widget-setstyle="jarviswidget-color-greenDark" rel="tooltip" data-placement="top" data-original-title="Dark Green"></span></li><li><span class="bg-color-greenLight" data-widget-setstyle="jarviswidget-color-greenLight" rel="tooltip" data-placement="top" data-original-title="Light Green"></span></li><li><span class="bg-color-purple" data-widget-setstyle="jarviswidget-color-purple" rel="tooltip" data-placement="top" data-original-title="Purple"></span></li><li><span class="bg-color-magenta" data-widget-setstyle="jarviswidget-color-magenta" rel="tooltip" data-placement="top" data-original-title="Magenta"></span></li><li><span class="bg-color-pink" data-widget-setstyle="jarviswidget-color-pink" rel="tooltip" data-placement="right" data-original-title="Pink"></span></li><li><span class="bg-color-pinkDark" data-widget-setstyle="jarviswidget-color-pinkDark" rel="tooltip" data-placement="left" data-original-title="Fade Pink"></span></li><li><span class="bg-color-blueLight" data-widget-setstyle="jarviswidget-color-blueLight" rel="tooltip" data-placement="top" data-original-title="Light Blue"></span></li><li><span class="bg-color-teal" data-widget-setstyle="jarviswidget-color-teal" rel="tooltip" data-placement="top" data-original-title="Teal"></span></li><li><span class="bg-color-blue" data-widget-setstyle="jarviswidget-color-blue" rel="tooltip" data-placement="top" data-original-title="Ocean Blue"></span></li><li><span class="bg-color-blueDark" data-widget-setstyle="jarviswidget-color-blueDark" rel="tooltip" data-placement="top" data-original-title="Night Sky"></span></li><li><span class="bg-color-darken" data-widget-setstyle="jarviswidget-color-darken" rel="tooltip" data-placement="right" data-original-title="Night"></span></li><li><span class="bg-color-yellow" data-widget-setstyle="jarviswidget-color-yellow" rel="tooltip" data-placement="left" data-original-title="Day Light"></span></li><li><span class="bg-color-orange" data-widget-setstyle="jarviswidget-color-orange" rel="tooltip" data-placement="bottom" data-original-title="Orange"></span></li><li><span class="bg-color-orangeDark" data-widget-setstyle="jarviswidget-color-orangeDark" rel="tooltip" data-placement="bottom" data-original-title="Dark Orange"></span></li><li><span class="bg-color-red" data-widget-setstyle="jarviswidget-color-red" rel="tooltip" data-placement="bottom" data-original-title="Red Rose"></span></li><li><span class="bg-color-redLight" data-widget-setstyle="jarviswidget-color-redLight" rel="tooltip" data-placement="bottom" data-original-title="Light Red"></span></li><li><span class="bg-color-white" data-widget-setstyle="jarviswidget-color-white" rel="tooltip" data-placement="right" data-original-title="Purity"></span></li><li><a href="javascript:void(0);" class="jarviswidget-remove-colors" data-widget-setstyle="" rel="tooltip" data-placement="bottom" data-original-title="Reset widget color to default">Remove</a></li></ul></div>
					<span class="widget-icon"> <i class="fa fa-table"></i> </span>
					<h2>Nama Siswa SSB Harapan Lereng</h2>


				<span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

				<!-- widget div-->
				<div role="content">

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">

					<div id="responsecontainer">

						

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

			

		</article>
		<!-- WIDGET END -->

	</div>

	<!-- end row -->

	<!-- end row -->

</section>
<!-- end widget grid -->

<script type="text/javascript">

	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

	pageSetUp();
	
	/*
	 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
	 * eg alert("my home function");
	 * 
	 * var pagefunction = function() {
	 *   ...
	 * }
	 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
	 * 
	 */
	
	// PAGE RELATED SCRIPTS
	
	// pagefunction	
	var pagefunction = function() {
		//console.log("cleared");
		
		/* // DOM Position key index //
		
			l - Length changing (dropdown)
			f - Filtering input (search)
			t - The Table! (datatable)
			i - Information (records)
			p - Pagination (paging)
			r - pRocessing 
			< and > - div elements
			<"#id" and > - div with an id
			<"class" and > - div with a class
			<"#id.class" and > - div with an id and class
			
			Also see: http://legacy.datatables.net/usage/features
		*/	

		/* BASIC ;*/
			var responsiveHelper_dt_basic = undefined;
			var responsiveHelper_datatable_fixed_column = undefined;
			var responsiveHelper_datatable_col_reorder = undefined;
			var responsiveHelper_datatable_tabletools = undefined;
			
			var breakpointDefinition = {
				tablet : 1024,
				phone : 480
			};

			$('#dt_basic').dataTable({
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
					"t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
				"autoWidth" : true,
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_dt_basic) {
						responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_dt_basic.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_dt_basic.respond();
				}
			});

		/* END BASIC */
		
		/* COLUMN FILTER  */
	    var otable = $('#datatable_fixed_column').DataTable({
	    	//"bFilter": false,
	    	//"bInfo": false,
	    	//"bLengthChange": false
	    	//"bAutoWidth": false,
	    	//"bPaginate": false,
	    	//"bStateSave": true // saves sort state using localStorage
			"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
					"t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
			"autoWidth" : true,
			"preDrawCallback" : function() {
				// Initialize the responsive datatables helper once.
				if (!responsiveHelper_datatable_fixed_column) {
					responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
				}
			},
			"rowCallback" : function(nRow) {
				responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
			},
			"drawCallback" : function(oSettings) {
				responsiveHelper_datatable_fixed_column.respond();
			}		
		
	    });
	    
	    // custom toolbar
	    $("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
	    	   
	    // Apply the filter
	    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
	    	
	        otable
	            .column( $(this).parent().index()+':visible' )
	            .search( this.value )
	            .draw();
	            
	    } );
	    /* END COLUMN FILTER */   
    
		/* COLUMN SHOW - HIDE */
		$('#datatable_col_reorder').dataTable({
			"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
					"t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
			"autoWidth" : true,
			"preDrawCallback" : function() {
				// Initialize the responsive datatables helper once.
				if (!responsiveHelper_datatable_col_reorder) {
					responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
				}
			},
			"rowCallback" : function(nRow) {
				responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
			},
			"drawCallback" : function(oSettings) {
				responsiveHelper_datatable_col_reorder.respond();
			}			
		});
		
		/* END COLUMN SHOW - HIDE */

		/* TABLETOOLS */
		$('#datatable_tabletools').dataTable({
			
			// Tabletools options: 
			//   https://datatables.net/extensions/tabletools/button_options
			"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
					"t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
	        "oTableTools": {
	        	 "aButtons": [
	             "copy",
	             "csv",
	             "xls",
	                {
	                    "sExtends": "pdf",
	                    "sTitle": "SmartAdmin_PDF",
	                    "sPdfMessage": "SmartAdmin PDF Export",
	                    "sPdfSize": "letter"
	                },
	             	{
                    	"sExtends": "print",
                    	"sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
                	}
	             ],
	            "sSwfPath": "js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
	        },
			"autoWidth" : true,
			"preDrawCallback" : function() {
				// Initialize the responsive datatables helper once.
				if (!responsiveHelper_datatable_tabletools) {
					responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
				}
			},
			"rowCallback" : function(nRow) {
				responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
			},
			"drawCallback" : function(oSettings) {
				responsiveHelper_datatable_tabletools.respond();
			}
		});
		
		/* END TABLETOOLS */

	};

	// load related plugins
	
	loadScript("js/plugin/datatables/jquery.dataTables.min.js", function(){
		loadScript("js/plugin/datatables/dataTables.colVis.min.js", function(){
			loadScript("js/plugin/datatables/dataTables.tableTools.min.js", function(){
				loadScript("js/plugin/datatables/dataTables.bootstrap.min.js", function(){
					loadScript("js/plugin/datatable-responsive/datatables.responsive.min.js", pagefunction)
				});
			});
		});
	});


</script>
</div>
			
			<!-- END #MAIN CONTENT -->

		<!-- <div class="demo"><span id="demo-setting"><i class="fa fa-cogs fa-spin txt-color-blueDark"></i></span> <form><legend class="no-padding margin-bottom-10">Layout Options</legend><section><label><input name="subscription" id="smart-fixed-header" type="checkbox" class="checkbox style-0"><span>Fixed Header</span></label><label><input type="checkbox" name="terms" id="smart-fixed-navigation" class="checkbox style-0"><span>Fixed Navigation</span></label><label><input type="checkbox" name="terms" id="smart-fixed-ribbon" class="checkbox style-0"><span>Fixed Ribbon</span></label><label><input type="checkbox" name="terms" id="smart-fixed-footer" class="checkbox style-0"><span>Fixed Footer</span></label><label><input type="checkbox" name="terms" id="smart-fixed-container" class="checkbox style-0"><span>Inside <b>.container</b></span></label><label style="display:block;"><input type="checkbox" name="terms" id="smart-rtl" class="checkbox style-0"><span>RTL Support</span></label><label style="display:block;"><input type="checkbox" id="smart-topmenu" class="checkbox style-0"><span>Menu on <b>top</b></span></label> <label style="display:block;"><input type="checkbox" id="colorblind-friendly" class="checkbox style-0"><span>For Colorblind <div class="font-xs text-right">(experimental)</div></span></label><span id="smart-bgimages" style="display: none;"></span></section><section><h6 class="margin-top-10 semi-bold margin-bottom-5">Clear Localstorage</h6><a href="javascript:void(0);" class="btn btn-xs btn-block btn-primary" id="reset-smart-widget"><i class="fa fa-refresh"></i> Factory Reset</a></section> <h6 class="margin-top-10 semi-bold margin-bottom-5">SmartAdmin Skins</h6><section id="smart-styles"><a href="javascript:void(0);" id="smart-style-0" data-skinlogo="img/logo.png" class="btn btn-block btn-xs txt-color-white margin-right-5" style="background-color:#4E463F;"><i class="fa fa-check fa-fw" id="skin-checked"></i>Smart Default</a><a href="javascript:void(0);" id="smart-style-1" data-skinlogo="img/logo-white.png" class="btn btn-block btn-xs txt-color-white" style="background:#3A4558;">Dark Elegance</a><a href="javascript:void(0);" id="smart-style-2" data-skinlogo="img/logo-blue.png" class="btn btn-xs btn-block txt-color-darken margin-top-5" style="background:#fff;">Ultra Light</a><a href="javascript:void(0);" id="smart-style-3" data-skinlogo="img/logo-pale.png" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background:#f78c40">Google Skin</a><a href="javascript:void(0);" id="smart-style-4" data-skinlogo="img/logo-pale.png" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background: #bbc0cf; border: 1px solid #59779E; color: #17273D !important;">PixelSmash</a> <a href="javascript:void(0);" id="smart-style-5" data-skinlogo="img/logo-pale.png" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background: rgba(153, 179, 204, 0.2); border: 1px solid rgba(121, 161, 221, 0.8); color: #17273D !important;">Glass </a><a href="javascript:void(0);" id="smart-style-6" data-skinlogo="img/logo-pale.png" class="btn btn-xs btn-block txt-color-white margin-top-6" style="background: #2196F3; border: 1px solid rgba(0, 0, 0, 0.3); color: #FFF !important;">MaterialDesign <sup>beta</sup> </a></section></form> </div> --></div>
		<!-- END #MAIN PANEL -->

		<!-- #PAGE FOOTER -->
		<div class="page-footer">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<span class="txt-color-white">SmartAdmin 1.8.0 <span class="hidden-xs"> - Web Application Framework</span> © 2014-2016</span>
				</div>

				<div class="col-xs-6 col-sm-6 text-right hidden-xs">
					<div class="txt-color-white inline-block">
						<i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
						<div class="btn-group dropup">
							<button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
								<i class="fa fa-link"></i> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu pull-right text-left">
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Download Progress</p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-success" style="width: 50%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Server Load</p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-success" style="width: 20%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<button class="btn btn-block btn-default">refresh</button>
									</div>
								</li>
							</ul>
						</div>
						<!-- end btn-group-->
					</div>
					<!-- end div-->
				</div>
				<!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- END FOOTER -->

		<!-- #SHORTCUT AREA : With large tiles (activated via clicking user name tag)
			 Note: These tiles are completely responsive, you can add as many as you like -->
		<div id="shortcut">
			<ul>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
				</li>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
				</li>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
				</li>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
				</li>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
				</li>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
				</li>
			</ul>
		</div>
		<!-- END SHORTCUT AREA -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->


		<!-- #PLUGINS -->
		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script type="text/javascript" async="" src="js/ga.js.download"></script><script src="js/jquery.min.js.download"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
			}
		</script>

		<script src="js/jquery-ui.min.js.download"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<script src="js/jquery.ui.touch-punch.min.js.download"></script> 

		<!-- BOOTSTRAP JS -->
		<script src="js/bootstrap.min.js.download"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="js/SmartNotification.min.js.download"></script>

		<!-- JARVIS WIDGETS -->
		<script src="js/jarvis.widget.min.js"></script>

		<!-- EASY PIE CHARTS -->
		<script src="js/jquery.easy-pie-chart.min.js.download"></script>

		<!-- SPARKLINES -->
		<script src="js/jquery.sparkline.min.js.download"></script>

		<!-- JQUERY VALIDATE -->
		<script src="js/jquery.validate.min.js.download"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="js/jquery.maskedinput.min.js.download"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="js/select2.min.js.download"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="js/bootstrap-slider.min.js.download"></script>

		<!-- browser msie issue fix -->
		<script src="js/jquery.mb.browser.min.js.download"></script>

		<!-- FastClick: For mobile devices: you can disable this in app.js -->
		<script src="js/fastclick.min.js.download"></script>

		<!--[if IE 8]>
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
		<![endif]-->

		<!-- Demo purpose only -->
		<script src="js/demo.min.js.download"></script>

		<!-- MAIN APP JS FILE -->
		<script src="js/app.min.js"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		<script src="js/voicecommand.min.js.download"></script><div class="modal fade" id="voiceModal" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"></div></div></div>

		<!-- SmartChat UI : plugin -->
		<script src="js/smart.chat.ui.min.js.download"></script>
		<script src="js/smart.chat.manager.min.js.download"></script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-43548732-3']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>

	

<div id="divSmallBoxes"></div><div id="divMiniIcons"></div><div id="divbigBoxes"></div><script type="text/javascript" src="js/jquery.flot.cust.min.js.download"></script><script type="text/javascript" src="js/jquery-jvectormap-1.2.2.min.js.download"></script><script type="text/javascript" src="js/moment.min.js.download"></script><script type="text/javascript" src="js/jquery.flot.resize.min.js.download"></script><script type="text/javascript" src="js/jquery-jvectormap-world-mill-en.js.download"></script><script type="text/javascript" src="js/jquery.fullcalendar.min.js.download"></script><script type="text/javascript" src="js/jquery.flot.time.min.js.download"></script><script type="text/javascript" src="js/jquery.flot.tooltip.min.js.download"></script><script type="text/javascript" src="js/delete-table-row.min.js.download"></script><script type="text/javascript" src="js/summernote.min.js.download"></script><script type="text/javascript" src="js/jquery.flot.fillbetween.min.js.download"></script><script type="text/javascript" src="js/jquery.flot.orderBar.min.js.download"></script><script type="text/javascript" src="js/jquery.flot.pie.min.js.download"></script><script type="text/javascript" src="js/raphael.min.js.download"></script><script type="text/javascript" src="js/morris.min.js.download"></script><script type="text/javascript" src="js/dygraph-combined.min.js.download"></script><script type="text/javascript" src="js/demo-data.min.js.download"></script><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div><script type="text/javascript" src="js/jquery.dataTables.min.js.download"></script><script type="text/javascript" src="js/dataTables.colVis.min.js.download"></script><script type="text/javascript" src="js/dataTables.tableTools.min.js.download"></script></body></html>