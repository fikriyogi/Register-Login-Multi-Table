<?php
	include("assets/dbconnect.php");
?>
<!DOCTYPE html>
<!-- saved from url=(0087)http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#ajax/profile.html -->
<html lang="en-us"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<title>Profile</title>
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
<?php
	$id=$_GET['id'];
	$qrykoreksi=mysql_query("select * from student where id='$id' LIMIT 1");
	$dataku=mysql_fetch_object($qrykoreksi);
	list($tanggal,$bulan,$tahun) = explode('-',$dataku->tgl_lahir);
?>

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
						<ul>
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/dashboard.html" title="Dashboard"><span class="menu-item-parent">Analytics Dashboard</span></a>
							</li>
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/dashboard-social.html" title="Dashboard"><span class="menu-item-parent">Social Wall</span></a>
							</li>
						</ul>	
					</li>
					<li class="top-menu-invisible">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">SmartAdmin Intel</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/layouts.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">App Layouts</span></a>
							</li>
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/skins.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Prebuilt Skins</span></a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/difver.html"><i class="fa fa-stack-overflow"></i> App Variations</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/applayout.html"><i class="fa fa-cube"></i> App Settings</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Outlook</span> <span class="badge pull-right inbox-badge margin-right-13">14</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/inbox.html">Inbox </a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/inbox-email-view.html">Email view </a>
							</li>
							<li>
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
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/flot.html">Flot Chart</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/morris.html">Morris Charts</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/sparkline-charts.html">Sparklines</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/easypie-charts.html">EasyPieCharts</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/dygraphs.html">Dygraphs</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/chartjs.html">Chart.js</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/hchartable.html">HighchartTable <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/table.html">Normal Tables</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/datatables.html">Data Tables <span class="badge inbox-badge bg-color-greenLight hidden-mobile">responsive</span></a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/jqgrid.html">Jquery Grid</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/form-elements.html">Smart Form Elements</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/form-templates.html">Smart Form Layouts</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/validation.html">Smart Form Validation</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/bootstrap-forms.html">Bootstrap Form Elements</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/bootstrap-validator.html">Bootstrap Form Validation</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/plugins.html">Form Plugins</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/wizard.html">Wizards</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/other-editors.html">Bootstrap Editors</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/dropzone.html">Dropzone</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/image-editor.html">Image Cropping</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/ckeditor.html">CK Editor</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/general-elements.html">General Elements</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/buttons.html">Buttons</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#">Icons<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
								<ul>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
									</li>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons</a>
									</li>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/flags.html"><i class="fa fa-flag"></i> Flags</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/grid.html">Grid</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/treeview.html">Tree View</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/nestable-list.html">Nestable Lists</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/jqui.html">JQuery UI</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/typography.html">Typography</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#">Six Level Menu<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
								<ul>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-fw fa-folder-open"></i> Item #2<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
										<ul>
											<li>
												<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-fw fa-folder-open"></i> Sub #2.1 <b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
												<ul>
													<li>
														<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-fw fa-file-text"></i> Item #2.1.1</a>
													</li>
													<li>
														<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-fw fa-plus"></i> Expand<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
														<ul>
															<li>
																<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-fw fa-file-text"></i> File</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-fw fa-folder-open"></i> Item #3<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
		
										<ul>
											<li>
												<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level <b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
												<ul>
													<li>
														<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-fw fa-file-text"></i> File</a>
													</li>
													<li>
														<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-fw fa-file-text"></i> File</a>
													</li>
												</ul>
											</li>
										</ul>	
									</li>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#" class="inactive"><i class="fa fa-fw fa-folder-open"></i> Item #4 (disabled)</a>
									</li>	
									
								</ul>
							</li>
						</ul>
					</li>	
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/ajax/widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
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
					<li class="active open">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">App Views</span><b class="collapse-sign"><em class="fa fa-minus-square-o"></em></b></a>
						<ul style="display: block;">
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
							<li class="active">
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
				<ol class="breadcrumb"><li>Home</li><li>App Views</li><li>Profile</li></ol>
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
			<div id="content" style="opacity: 1;"><!-- Bread crumb is created dynamically -->
<!-- row -->
<div class="row">

	<!-- col -->
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-puzzle-piece"></i> 
				App Views 
			<span>&gt;  
				Profile
			</span>
		</h1>
	</div>
	<!-- end col -->

	<!-- right side of the page with the sparkline graphs -->
	<!-- col -->
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		<!-- sparks -->
		<ul id="sparks">
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
		<!-- end sparks -->
	</div>
	<!-- end col -->

</div>
<!-- end row -->

<!-- row -->

<div class="row">

	<div class="col-sm-12">


			<div class="well well-sm">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-6">
						<div class="well well-light well-sm no-margin no-padding">

							<div class="row">

								<div class="col-sm-12">
									<div id="myCarousel" class="carousel fade profile-carousel">
										<div class="air air-bottom-right padding-10">
											<a href="javascript:void(0);" class="btn txt-color-white bg-color-teal btn-sm"><i class="fa fa-check"></i> Follow</a>&nbsp; <a href="javascript:void(0);" class="btn txt-color-white bg-color-pinkDark btn-sm"><i class="fa fa-link"></i> Connect</a>
										</div>
										<div class="air air-top-left padding-10">
											<h4 class="txt-color-white font-md"><?php echo $dataku->tgl_lahir; ?></h4>
										</div>
										<ol class="carousel-indicators">
											<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
											<li data-target="#myCarousel" data-slide-to="1" class=""></li>
											<li data-target="#myCarousel" data-slide-to="2" class=""></li>
										</ol>
										<div class="carousel-inner">
											<!-- Slide 1 -->
											<div class="item active">
												<img src="img/s1.jpg" alt="">
											</div>
											<!-- Slide 2 -->
											<div class="item">
												<img src="img/s2.jpg" alt="">
											</div>
											<!-- Slide 3 -->
											<div class="item">
												<img src="img/m3.jpg" alt="">
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-12">

									<div class="row">

										<div class="col-sm-3 profile-pic">
											<img src="<?php echo $dataku->photo; ?>" background="#ffffff">
											<div class="padding-10">
												<h4 class="font-md"><strong>1,543</strong>
												<br>
												<small>Followers</small></h4>
												<br>
												<h4 class="font-md"><strong>419</strong>
												<br>
												<small>Connections</small></h4>
											</div>
										</div>
										<div class="col-sm-6">
											<h1><?php echo $dataku->fn?> <span class="semi-bold">Doe</span>
											<br>
											<small> CEO, SmartAdmin</small></h1>

											<ul class="list-unstyled">
												<li>
													<p class="text-muted">
														<i class="fa fa-phone"></i>&nbsp;&nbsp;(<span class="txt-color-darken">313</span>) <span class="txt-color-darken">464</span> - <span class="txt-color-darken">6473</span>
													</p>
												</li>
												<li>
													<p class="text-muted">
														<i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:simmons@smartadmin">ceo@smartadmin.com</a>
													</p>
												</li>
												<li>
													<p class="text-muted">
														<i class="fa fa-skype"></i>&nbsp;&nbsp;<span class="txt-color-darken">john12</span>
													</p>
												</li>
												<li>
													<p class="text-muted">
														<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span class="txt-color-darken">Free after <a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Create an Appointment">4:30 PM</a></span>
													</p>
												</li>
											</ul>
											<br>
											<p class="font-md">
												<i>A little about me...</i>
											</p>
											<p>

												Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
												cumque nihil impedit quo minus id quod maxime placeat facere

											</p>
											<br>
											<a href="javascript:void(0);" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i> Send Message</a>
											<br>
											<br>

										</div>
										<div class="col-sm-3">
											<h1><small>Connections</small></h1>
											<ul class="list-inline friends-list">
												<li><img src="img/1.png" alt="friend-1">
												</li>
												<li><img src="img/2.png" alt="friend-2">
												</li>
												<li><img src="img/3.png" alt="friend-3">
												</li>
												<li><img src="img/4.png" alt="friend-4">
												</li>
												<li><img src="img/5.png" alt="friend-5">
												</li>
												<li><img src="img/male.png" alt="friend-6">
												</li>
												<li>
													<a href="javascript:void(0);">413 more</a>
												</li>
											</ul>

											<h1><small>Recent visitors</small></h1>
											<ul class="list-inline friends-list">
												<li><img src="img/male.png" alt="friend-1">
												</li>
												<li><img src="img/female.png" alt="friend-2">
												</li>
												<li><img src="img/female.png" alt="friend-3">
												</li>
											</ul>

										</div>

									</div>

								</div>

							</div>

							<div class="row">

								<div class="col-sm-12">

									<hr>

									<div class="padding-10">

										<ul class="nav nav-tabs tabs-pull-right">
											<li class="active">
												<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#a1" data-toggle="tab">Recent Articles</a>
											</li>
											<li>
												<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/ajax/index.html#a2" data-toggle="tab">New Members</a>
											</li>
											<li class="pull-left">
												<span class="margin-top-10 display-inline"><i class="fa fa-rss text-success"></i> Activity</span>
											</li>
										</ul>

										<div class="tab-content padding-top-10">
											<div class="tab-pane fade in active" id="a1">

												<div class="row">

													<div class="col-xs-2 col-sm-1">
														<time datetime="2014-09-20" class="icon">
															<strong>Jan</strong>
															<span>10</span>
														</time>
													</div>

													<div class="col-xs-10 col-sm-11">
														<h6 class="no-margin"><a href="javascript:void(0);">Allice in Wonderland</a></h6>
														<p>
															Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi Nam eget dui.
															Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
															sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.
														</p>
													</div>

													<div class="col-sm-12">

														<hr>

													</div>

													<div class="col-xs-2 col-sm-1">
														<time datetime="2014-09-20" class="icon">
															<strong>Jan</strong>
															<span>10</span>
														</time>
													</div>

													<div class="col-xs-10 col-sm-11">
														<h6 class="no-margin"><a href="javascript:void(0);">World Report</a></h6>
														<p>
															Morning our be dry. Life also third land after first beginning to evening cattle created let subdue you'll winged don't Face firmament.
															You winged you're was Fruit divided signs lights i living cattle yielding over light life life sea, so deep.
															Abundantly given years bring were after. Greater you're meat beast creeping behold he unto She'd doesn't. Replenish brought kind gathering Meat.
														</p>
													</div>

													<div class="col-sm-12">

														<br>

													</div>

												</div>

											</div>
											<div class="tab-pane fade" id="a2">

												<div class="alert alert-info fade in">
													<button class="close" data-dismiss="alert">
														×
													</button>
													<i class="fa-fw fa fa-info"></i>
													<strong>51 new members </strong>joined today!
												</div>

												<div class="user" title="email@company.com">
													<img src="img/female.png"><a href="javascript:void(0);">Jenn Wilson</a>
													<div class="email">
														travis@company.com
													</div>
												</div>
												<div class="user" title="email@company.com">
													<img src="img/male.png"><a href="javascript:void(0);">Marshall Hitt</a>
													<div class="email">
														marshall@company.com
													</div>
												</div>
												<div class="user" title="email@company.com">
													<img src="img/male.png"><a href="javascript:void(0);">Joe Cadena</a>
													<div class="email">
														joe@company.com
													</div>
												</div>
												<div class="user" title="email@company.com">
													<img src="img/male.png"><a href="javascript:void(0);">Mike McBride</a>
													<div class="email">
														mike@company.com
													</div>
												</div>
												<div class="user" title="email@company.com">
													<img src="img/male.png"><a href="javascript:void(0);">Travis Wilson</a>
													<div class="email">
														travis@company.com
													</div>
												</div>
												<div class="user" title="email@company.com">
													<img src="img/male.png"><a href="javascript:void(0);">Marshall Hitt</a>
													<div class="email">
														marshall@company.com
													</div>
												</div>
												<div class="user" title="Joe Cadena joe@company.com">
													<img src="img/male.png"><a href="javascript:void(0);">Joe Cadena</a>
													<div class="email">
														joe@company.com
													</div>
												</div>
												<div class="user" title="email@company.com">
													<img src="img/male.png"><a href="javascript:void(0);">Mike McBride</a>
													<div class="email">
														mike@company.com
													</div>
												</div>
												<div class="user" title="email@company.com">
													<img src="img/male.png"><a href="javascript:void(0);">Marshall Hitt</a>
													<div class="email">
														marshall@company.com
													</div>
												</div>
												<div class="user" title="email@company.com">
													<img src="img/male.png"><a href="javascript:void(0);">Joe Cadena</a>
													<div class="email">
														joe@company.com
													</div>
												</div>
												<div class="user" title="email@company.com">
													<img src="img/male.png"><a href="javascript:void(0);"> Mike McBride</a>
													<div class="email">
														mike@company.com
													</div>
												</div>

												<div class="text-center">
													<ul class="pagination pagination-sm">
														<li class="disabled">
															<a href="javascript:void(0);">Prev</a>
														</li>
														<li class="active">
															<a href="javascript:void(0);">1</a>
														</li>
														<li>
															<a href="javascript:void(0);">2</a>
														</li>
														<li>
															<a href="javascript:void(0);">3</a>
														</li>
														<li>
															<a href="javascript:void(0);">...</a>
														</li>
														<li>
															<a href="javascript:void(0);">99</a>
														</li>
														<li>
															<a href="javascript:void(0);">Next</a>
														</li>
													</ul>
												</div>

											</div><!-- end tab -->
										</div>

									</div>

								</div>

							</div>
							<!-- end row -->

						</div>

					</div>
					<div class="col-sm-12 col-md-12 col-lg-6">

						<form method="post" class="well padding-bottom-10" onsubmit="return false;">
							<textarea rows="2" class="form-control" placeholder="What are you thinking?"></textarea>
							<div class="margin-top-10">
								<button type="submit" class="btn btn-sm btn-primary pull-right">
									Post
								</button>
								<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Location"><i class="fa fa-location-arrow"></i></a>
								<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Voice"><i class="fa fa-microphone"></i></a>
								<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
								<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
							</div>
						</form>

						<span class="timeline-seperator text-center"> <span>10:30PM January 1st, 2013</span>
							<div class="btn-group pull-right">
								<a href="javascript:void(0);" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><span class="caret single"></span></a>
								<ul class="dropdown-menu text-left">
									<li>
										<a href="javascript:void(0);">Hide this post</a>
									</li>
									<li>
										<a href="javascript:void(0);">Hide future posts from this user</a>
									</li>
									<li>
										<a href="javascript:void(0);">Mark as spam</a>
									</li>
								</ul>
							</div> </span>
						<div class="chat-body no-padding profile-message">
							<ul>
								<li class="message">
									<img src="img/sunny.png" class="online">
									<span class="message-text"> <a href="javascript:void(0);" class="username">John Doe <small class="text-muted pull-right ultra-light"> 2 Minutes ago </small></a> Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very
										image let unto fowl isn't in blessed fill life yielding above all moved </span>
									<ul class="list-inline font-xs">
										<li>
											<a href="javascript:void(0);" class="text-info"><i class="fa fa-reply"></i> Reply</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-muted">Show All Comments (14)</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-primary">Edit</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-danger">Delete</a>
										</li>
									</ul>
								</li>
								<li class="message message-reply">
									<img src="img/3.png" class="online">
									<span class="message-text"> <a href="javascript:void(0);" class="username">Serman Syla</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

									<ul class="list-inline font-xs">
										<li>
											<a href="javascript:void(0);" class="text-muted">1 minute ago </a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
										</li>
									</ul>

								</li>
								<li class="message message-reply">
									<img src="img/4.png" class="online">
									<span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

									<ul class="list-inline font-xs">
										<li>
											<a href="javascript:void(0);" class="text-muted">a moment ago </a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
										</li>
									</ul>
									<input class="form-control input-xs" placeholder="Type and enter" type="text">
								</li>
							</ul>

						</div>

						<span class="timeline-seperator text-center"> <span>11:30PM November 27th, 2013</span>
							<div class="btn-group pull-right">
								<a href="javascript:void(0);" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><span class="caret single"></span></a>
								<ul class="dropdown-menu text-left">
									<li>
										<a href="javascript:void(0);">Hide this post</a>
									</li>
									<li>
										<a href="javascript:void(0);">Hide future posts from this user</a>
									</li>
									<li>
										<a href="javascript:void(0);">Mark as spam</a>
									</li>
								</ul>
							</div> </span>
						<div class="chat-body no-padding profile-message">
							<ul>
								<li class="message">
									<img src="img/1.png" class="online">
									<span class="message-text"> <a href="javascript:void(0);" class="username">John Doe <small class="text-muted pull-right ultra-light"> 2 Minutes ago </small></a> Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved </span>
									<ul class="list-inline font-xs">
										<li>
											<a href="javascript:void(0);" class="text-info"><i class="fa fa-reply"></i> Reply</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-muted">Show All Comments (14)</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-primary">Hide</a>
										</li>
									</ul>
								</li>
								<li class="message message-reply">
									<img src="img/3.png" class="online">
									<span class="message-text"> <a href="javascript:void(0);" class="username">Serman Syla</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

									<ul class="list-inline font-xs">
										<li>
											<a href="javascript:void(0);" class="text-muted">1 minute ago </a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
										</li>
									</ul>

								</li>
								<li class="message message-reply">
									<img src="img/4.png" class="online">
									<span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

									<ul class="list-inline font-xs">
										<li>
											<a href="javascript:void(0);" class="text-muted">a moment ago </a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
										</li>
									</ul>

								</li>
								<li class="message message-reply">
									<img src="img/4.png" class="online">
									<span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> </span>

									<ul class="list-inline font-xs">
										<li>
											<a href="javascript:void(0);" class="text-muted">a moment ago </a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
										</li>
									</ul>

								</li>
								<li>
									<div class="input-group wall-comment-reply">
										<input id="btn-input" type="text" class="form-control" placeholder="Type your message here...">
										<span class="input-group-btn">
											<button class="btn btn-primary" id="btn-chat">
												<i class="fa fa-reply"></i> Reply
											</button> </span>
									</div>
								</li>
							</ul>

						</div>


					</div>
				</div>

			</div>


	</div>

</div>

<!-- end row -->


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
	 * TO LOAD A SCRIPT:
	 * var pagefunction = function (){ 
	 *  loadScript(".../plugin.js", run_after_loaded);	
	 * }
	 * 
	 * OR
	 * 
	 * loadScript(".../plugin.js", run_after_loaded);
	 */

	// PAGE RELATED SCRIPTS

	// pagefunction
	
	var pagefunction = function() {
		
	};
	
	// end pagefunction
	
	// run pagefunction on load

	pagefunction();

</script>
</div>
			
			<!-- END #MAIN CONTENT -->

		<div class="demo"><span id="demo-setting"><i class="fa fa-cogs fa-spin txt-color-blueDark"></i></span> <form><legend class="no-padding margin-bottom-10">Layout Options</legend><section><label><input name="subscription" id="smart-fixed-header" type="checkbox" class="checkbox style-0"><span>Fixed Header</span></label><label><input type="checkbox" name="terms" id="smart-fixed-navigation" class="checkbox style-0"><span>Fixed Navigation</span></label><label><input type="checkbox" name="terms" id="smart-fixed-ribbon" class="checkbox style-0"><span>Fixed Ribbon</span></label><label><input type="checkbox" name="terms" id="smart-fixed-footer" class="checkbox style-0"><span>Fixed Footer</span></label><label><input type="checkbox" name="terms" id="smart-fixed-container" class="checkbox style-0"><span>Inside <b>.container</b></span></label><label style="display:block;"><input type="checkbox" name="terms" id="smart-rtl" class="checkbox style-0"><span>RTL Support</span></label><label style="display:block;"><input type="checkbox" id="smart-topmenu" class="checkbox style-0"><span>Menu on <b>top</b></span></label> <label style="display:block;"><input type="checkbox" id="colorblind-friendly" class="checkbox style-0"><span>For Colorblind <div class="font-xs text-right">(experimental)</div></span></label><span id="smart-bgimages" style="display: none;"></span></section><section><h6 class="margin-top-10 semi-bold margin-bottom-5">Clear Localstorage</h6><a href="javascript:void(0);" class="btn btn-xs btn-block btn-primary" id="reset-smart-widget"><i class="fa fa-refresh"></i> Factory Reset</a></section> <h6 class="margin-top-10 semi-bold margin-bottom-5">SmartAdmin Skins</h6><section id="smart-styles"><a href="javascript:void(0);" id="smart-style-0" data-skinlogo="img/logo.png" class="btn btn-block btn-xs txt-color-white margin-right-5" style="background-color:#4E463F;"><i class="fa fa-check fa-fw" id="skin-checked"></i>Smart Default</a><a href="javascript:void(0);" id="smart-style-1" data-skinlogo="img/logo-white.png" class="btn btn-block btn-xs txt-color-white" style="background:#3A4558;">Dark Elegance</a><a href="javascript:void(0);" id="smart-style-2" data-skinlogo="img/logo-blue.png" class="btn btn-xs btn-block txt-color-darken margin-top-5" style="background:#fff;">Ultra Light</a><a href="javascript:void(0);" id="smart-style-3" data-skinlogo="img/logo-pale.png" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background:#f78c40">Google Skin</a><a href="javascript:void(0);" id="smart-style-4" data-skinlogo="img/logo-pale.png" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background: #bbc0cf; border: 1px solid #59779E; color: #17273D !important;">PixelSmash</a> <a href="javascript:void(0);" id="smart-style-5" data-skinlogo="img/logo-pale.png" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background: rgba(153, 179, 204, 0.2); border: 1px solid rgba(121, 161, 221, 0.8); color: #17273D !important;">Glass </a><a href="javascript:void(0);" id="smart-style-6" data-skinlogo="img/logo-pale.png" class="btn btn-xs btn-block txt-color-white margin-top-6" style="background: #2196F3; border: 1px solid rgba(0, 0, 0, 0.3); color: #FFF !important;">MaterialDesign <sup>beta</sup> </a></section></form> </div></div>
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
		<script src="js/jarvis.widget.min.js.download"></script>

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
		<script src="js/app.min.js.download"></script>

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

	

<div id="divSmallBoxes"></div><div id="divMiniIcons"></div><div id="divbigBoxes"></div></body></html>