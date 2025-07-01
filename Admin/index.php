<?php include '../includes/sessions.php';
if($lock_screen){

echo '<script>window.location = "lock_screen.php";</script>';
		
}
?>
<!DOCTYPE html>

<!-- 

Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1

Version: 1.3

Author: KeenThemes

Website: http://www.keenthemes.com/preview/?theme=metronic

Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469

-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>ZNBS CMS</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES --> 

	<link href="media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/daterangepicker.css" rel="stylesheet" type="text/css" />

	<link href="media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>

	<link href="media/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="media/image/favicon.ico" />
	

</head>

<?php
include 'includes/header.php';
include 'includes/sidebar.php';
?>



		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>Widget Settings</h3>

				</div>

				<div class="modal-body">

					Widget settings form goes here

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<div class="color-mode-icons icon-color"></div>

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default" data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label>

									<span>Layout</span>

									<select class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

									</select>

								</label>

								<label>

									<span>Header</span>

									<select class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

									</select>

								</label>

								<label>

									<span>Sidebar</span>

									<select class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

								<label>

									<span>Footer</span>

									<select class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER -->    

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							Dashboard <small>ZNBS Site</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">Home</a> 

								<i class="icon-angle-right"></i>

							</li>

							

							<li class="pull-right no-text-shadow">

								<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">

									<i class="icon-calendar"></i>

									<span></span>

									<i class="icon-angle-down"></i>

								</div>

							</li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<div id="dashboard">

					<!-- BEGIN DASHBOARD STATS -->

					<div class="row-fluid">

						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
						
						<a href="SystemUsers.php">

							<div class="dashboard-stat blue">

								<div class="visual">

									<i class="icon-user"></i>

								</div>

								<div class="details">

									<div class="number">

									Users

									</div>

									<div class="desc">                           

										.

									</div>

								</div>

								<a class="more" href="#">

								Manage Users <i class="m-icon-swapright m-icon-white"></i>

								</a>                 

							</div>
							</a> 

						</div>
						
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
						
						<a href="ArticleList.php">

							<div class="dashboard-stat red">

								<div class="visual">

									<i class="icon-bookmark-empty"></i>

								</div>

								<div class="details">

									<div class="number">

									Articles

									</div>

									<div class="desc">                           

										.

									</div>

								</div>

								<a class="more" href="#">

								Manage Articles <i class="m-icon-swapright m-icon-white"></i>

								</a>                 

							</div>
							</a> 

						</div>

						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
						
						<a href="Downloads.php.php">

							<div class="dashboard-stat yellow">

								<div class="visual">

									<i class="icon-file"></i>

								</div>

								<div class="details">

									<div class="number">

									Downloads

									</div>

									<div class="desc">                           

										.

									</div>

								</div>

								<a class="more" href="#">

								Manage Downloads <i class="m-icon-swapright m-icon-white"></i>

								</a>                 

							</div>
							</a> 

						</div>

						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
						
						<a href="Employees.php">

							<div class="dashboard-stat green">

								<div class="visual">

									<i class="icon-group"></i>

								</div>

								<div class="details">

									<div class="number">

									Employees

									</div>

									<div class="desc">                           

										.

									</div>

								</div>

								<a class="more" href="#">

								Manage Employees <i class="m-icon-swapright m-icon-white"></i>

								</a>                 

							</div>
							</a> 

						</div>
                  

						
					</div>

					<!-- END DASHBOARD STATS -->

					<div class="clearfix"></div>

					
					<div class="clearfix"></div>

				</div>

			</div>

			<!-- END PAGE CONTAINER-->    

		</div>

		<!-- END PAGE -->

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<?php include 'includes/footer.php'; ?>
	
