<?php include '../includes/sessions.php'; ?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Metronic | Extra - Invoice</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/style-responsive.css" rel="stylesheet" type="text/css" />
	<link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="media/css/invoice.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/print.css" rel="stylesheet" type="text/css" media="print"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="media/image/favicon.ico" />
</head><!-- END HEAD --><!-- BEGIN BODY --><body class="page-header-fixed">	<!-- BEGIN HEADER -->	<div class="header navbar navbar-inverse navbar-fixed-top">		<!-- BEGIN TOP NAVIGATION BAR -->		<div class="navbar-inner">			<div class="container-fluid">				<!-- BEGIN LOGO -->				<a class="brand" href="index.php">				<img src="<?php echo $collegelog ;?>" alt="logo"/>				</a>				<!-- END LOGO -->				<!-- BEGIN RESPONSIVE MENU TOGGLER -->				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">				<img src="media/image/menu-toggler.png" alt="" />				</a>          				<!-- END RESPONSIVE MENU TOGGLER -->            				<!-- BEGIN TOP NAVIGATION MENU -->              				<ul class="nav pull-right">					<!-- BEGIN NOTIFICATION DROPDOWN -->   					<li class="dropdown" id="header_notification_bar">						<a href="#" class="dropdown-toggle" data-toggle="dropdown">						<i class="icon-warning-sign"></i>						<span class="badge">6</span>						</a>						<ul class="dropdown-menu extended notification">							<li>								<p>You have 14 new notifications</p>							</li>							<li>								<a href="#">								<span class="label label-success"><i class="icon-plus"></i></span>								New user registered. 								<span class="time">Just now</span>								</a>							</li>							<li>								<a href="#">								<span class="label label-important"><i class="icon-bolt"></i></span>								Server #12 overloaded. 								<span class="time">15 mins</span>								</a>							</li>							<li>								<a href="#">								<span class="label label-warning"><i class="icon-bell"></i></span>								Server #2 not respoding.								<span class="time">22 mins</span>								</a>							</li>							<li>								<a href="#">								<span class="label label-info"><i class="icon-bullhorn"></i></span>								Application error.								<span class="time">40 mins</span>								</a>							</li>							<li>								<a href="#">								<span class="label label-important"><i class="icon-bolt"></i></span>								Database overloaded 68%. 								<span class="time">2 hrs</span>								</a>							</li>							<li>								<a href="#">								<span class="label label-important"><i class="icon-bolt"></i></span>								2 user IP blocked.								<span class="time">5 hrs</span>								</a>							</li>							<li class="external">								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>							</li>						</ul>					</li>					<!-- END NOTIFICATION DROPDOWN -->					<!-- BEGIN INBOX DROPDOWN -->					<li class="dropdown" id="header_inbox_bar">						<a href="#" class="dropdown-toggle" data-toggle="dropdown">						<i class="icon-envelope"></i>						<span class="badge">5</span>						</a>						<ul class="dropdown-menu extended inbox">							<li>								<p>You have 12 new messages</p>							</li>							<li>								<a href="inbox.php?a=view">								<span class="photo"><img src="media/image/avatar2.jpg" alt="" /></span>								<span class="subject">								<span class="from">Lisa Wong</span>								<span class="time">Just Now</span>								</span>								<span class="message">								Vivamus sed auctor nibh congue nibh. auctor nibh								auctor nibh...								</span>  								</a>							</li>							<li>								<a href="inbox.php?a=view">								<span class="photo"><img src="./media/image/avatar3.jpg" alt="" /></span>								<span class="subject">								<span class="from">Richard Doe</span>								<span class="time">16 mins</span>								</span>								<span class="message">								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh								auctor nibh...								</span>  								</a>							</li>							<li>								<a href="inbox.php?a=view">								<span class="photo"><img src="./media/image/avatar1.jpg" alt="" /></span>								<span class="subject">								<span class="from">Bob Nilson</span>								<span class="time">2 hrs</span>								</span>								<span class="message">								Vivamus sed nibh auctor nibh congue nibh. auctor nibh								auctor nibh...								</span>  								</a>							</li>							<li class="external">								<a href="inbox.php">See all messages <i class="m-icon-swapright"></i></a>							</li>						</ul>					</li>					<!-- END INBOX DROPDOWN -->					<!-- BEGIN TODO DROPDOWN -->					<li class="dropdown" id="header_task_bar">						<a href="#" class="dropdown-toggle" data-toggle="dropdown">						<i class="icon-tasks"></i>						<span class="badge">5</span>						</a>						<ul class="dropdown-menu extended tasks">							<li>								<p>You have 12 pending tasks</p>							</li>							<li>								<a href="#">								<span class="task">								<span class="desc">New release v1.2</span>								<span class="percent">30%</span>								</span>								<span class="progress progress-success ">								<span style="width: 30%;" class="bar"></span>								</span>								</a>							</li>							<li>								<a href="#">								<span class="task">								<span class="desc">Application deployment</span>								<span class="percent">65%</span>								</span>								<span class="progress progress-danger progress-striped active">								<span style="width: 65%;" class="bar"></span>								</span>								</a>							</li>							<li>								<a href="#">								<span class="task">								<span class="desc">Mobile app release</span>								<span class="percent">98%</span>								</span>								<span class="progress progress-success">								<span style="width: 98%;" class="bar"></span>								</span>								</a>							</li>							<li>								<a href="#">								<span class="task">								<span class="desc">Database migration</span>								<span class="percent">10%</span>								</span>								<span class="progress progress-warning progress-striped">								<span style="width: 10%;" class="bar"></span>								</span>								</a>							</li>							<li>								<a href="#">								<span class="task">								<span class="desc">Web server upgrade</span>								<span class="percent">58%</span>								</span>								<span class="progress progress-info">								<span style="width: 58%;" class="bar"></span>								</span>								</a>							</li>							<li>								<a href="#">								<span class="task">								<span class="desc">Mobile development</span>								<span class="percent">85%</span>								</span>								<span class="progress progress-success">								<span style="width: 85%;" class="bar"></span>								</span>								</a>							</li>							<li class="external">								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>							</li>						</ul>					</li>					<!-- END TODO DROPDOWN -->					<!-- BEGIN USER LOGIN DROPDOWN -->					<li class="dropdown user">						<a href="#" class="dropdown-toggle" data-toggle="dropdown">						<img alt="" style="height:29px; width:29px"src="<?php echo $profilePic; ?>" />						<span class="username"><?php echo $firstname ;?></span>						<i class="icon-angle-down"></i>						</a>						<ul class="dropdown-menu">							<li><a href="userprofile.php"><i class="icon-user"></i> My Profile</a></li>						<!--	<li><a href="page_calendar.php"><i class="icon-calendar"></i> My Calendar</a></li>							<li><a href="inbox.php"><i class="icon-envelope"></i> My Inbox(3)</a></li>							<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>-->							<li class="divider"></li>							<li><a href="lock_screen.php"><i class="icon-lock"></i> Lock Screen</a></li>							<li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>						</ul>					</li>					<!-- END USER LOGIN DROPDOWN -->				</ul>				<!-- END TOP NAVIGATION MENU --> 			</div>		</div>		<!-- END TOP NAVIGATION BAR -->	</div>	<!-- END HEADER -->	<!-- BEGIN CONTAINER -->	<div class="page-container">	<!-- Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1Version: 1.3Author: KeenThemesWebsite: http://www.keenthemes.com/preview/?theme=metronic		<!-- BEGIN SIDEBAR -->		<div class="page-sidebar nav-collapse collapse">			<!-- BEGIN SIDEBAR MENU -->        			<ul class="page-sidebar-menu">				<li>					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->					<div class="sidebar-toggler hidden-phone"></div>					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->				</li>				<li>					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->					<form class="sidebar-search">						<div class="input-box">							<a href="javascript:;" class="remove"></a>							<input type="text" placeholder="Search..." />							<input type="button" class="submit" value=" " />						</div>					</form>					<!-- END RESPONSIVE QUICK SEARCH FORM -->				</li>				<li class="start active ">					<a href="index.php">					<i class="icon-home"></i> 					<span class="title">Dashboard</span>					<span class="selected"></span>					</a>				</li>				<li class="">					<a href="javascript:;">					<i class="icon-group"></i> 					<span class="title">Users</span>					<span class="arrow "></span>					</a>					<ul class="sub-menu">						<li >							<a href="SystemUsers.php" >							 Users List</a>						</li>						<li >							<a href="NewUser.php">							New User</a>						</li>						<li >							<a href="layout_horizontal_menu1.html">							User Logs</a>						</li>					</ul>				</li>				<li class="">					<a href="javascript:;">					<i class="icon-bookmark-empty"></i> 					<span class="title">Students</span>					<span class="arrow "></span>					</a>					<ul class="sub-menu">						<li >							<a href="Students.php">							Manage Students</a>						</li>						<li >							<a href="NewStudent_details.php">							New Student</a>						</li>											</ul>				</li>				<li class="">					<a href="javascript:;">					<i class="icon-money"></i> 					<span class="title">Programs & Courses</span>					<span class="arrow "></span>					</a>					<ul class="sub-menu">												<li >							<a href="Programs.php">							View Programs</a>						</li>						<li >							<a href="Courses.php">							View Courses</a>						</li>						<li >							<a href="NewProgram.php">							New Program</a>						</li>						<li >							<a href="NewCourse">							New Course</a>						</li>										</ul>				</li>				<li class="">					<a href="javascript:;">					<i class="icon-group"></i> 					<span class="title">Schools</span>					<span class="arrow "></span>					</a>					<ul class="sub-menu">						<li >							<a href="Schools.php">							<i class="icon-time"></i>							Manage Schools</a>						</li>						<li >							<a href="NewSchool.php">							<i class="icon-cogs"></i>							New School</a>						</li>											</ul>				</li>				<li class="">					<a href="javascript:;">					<i class="icon-gift"></i> 					<span class="title">Employees</span>					<span class="arrow "></span>					</a>					<ul class="sub-menu">						<li >							<a href="Employees.php">							Manage Employees</a>						</li>						<li >							<a href="NewEmployee.php">							New Employee</a>						</li>											</ul>				</li>				<li class="">					<a href="javascript:;">					<i class="icon-gift"></i> 					<span class="title">Finances</span>					<span class="arrow "></span>					</a>					<ul class="sub-menu">						<li >							<a href="CollectFees.php">							Collect Fees</a>						</li>						<li >							<a href="NewEmployee.php">							View Student Finance</a>						</li>											</ul>				</li>				<li>					<a class="active" href="javascript:;">					<i class="icon-sitemap"></i> 					<span class="title">Messages</span>					<span class="arrow "></span>					</a>					<ul class="sub-menu">						<li>							<a href="javascript:;">							New Dashboard Message							<span class="arrow"></span>							</a>													</li>												<li>							<a href="#">							View Dashboard Messages							</a>						</li>						<li>							<a href="#">							Manage SMS							</a>						</li>					</ul>				</li>					<li class="last ">					<a href="charts.html">					<i class="icon-bar-chart"></i> 					<span class="title">Reports</span>					</a>				</li>				<li class="">					<a href="javascript:;">					<i class="icon-cogs"></i> 					<span class="title">Settings</span>					<span class="arrow "></span>					</a>					<ul class="sub-menu">						<li >							<a href="layout_horizontal_sidebar_menu.html">							System Settings</a>						</li>						<li >							<a href="layout_horizontal_menu1.html">							User Preferences</a>						</li>											</ul>				</li>							</ul>			<!-- END SIDEBAR MENU -->		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid hidden-print">
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
						
						
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid invoice">
					<div class="row-fluid invoice-logo">
						<div class="span6 invoice-logo-space"><img src="<?php echo $collegelogo ;?>" style="width:180px;" alt="" /> </div>						<?php 						$recieptid=$_SESSION['reciept_no'];						 							 $query="SELECT * FROM `reciepts`  INNER JOIN  `student_tbl` ON `reciepts`.`student_id`=`student_tbl`.`Student_id` WHERE `receipt_id`='$recieptid'";            $q1=mysqli_query($conn,$query)or die(mysqli_error());                            while ($row = mysqli_fetch_array($q1)) {            $student_id=$row['Student_id'];            $firstname=$row['st_first_name'];           $lastname=$row['st_last_name'];            $semail = $row['st_email'];           $innitials = $row['st_innitial'];		   $dateofTransact= $row['date'];		   $timatamp= strtotime($dateofTransact);		   $payment_mode=$row['payment_mode'];		   		   		  // $date = new DateTime(								            $Total+= $row['product_total'];														?>
						<div class="span6">
							<p>RECEIPT <span class="muted">Reciept No : <?php echo $row['receipt_id'] ;?> </span></p>
						</div>
					</div>
					<hr />
					<div class="row-fluid">					
						<div class="span4">
							<h4>Recieved From :</h4>							
							<ul class="unstyled">
								<li><?php echo $firstname ;?> <?php echo $innitials ;?> <?php echo $lastname ;?></li>
								<li>Student No: <?php echo $student_id ;?> </li>
								<li>Email :<?php echo $semail ;?> </li>
											
							</ul>
						</div>                           
						
						<div class="span8 invoice-payment">
							
							<ul class="unstyled invoice-block">
								<li><strong>PAYMENT MODE:</strong> <?php echo $payment_mode ;?></li>
								<li><strong>TPIN:</strong> <?php echo $collegetpin ;?></li>
								<li><strong>Date:</strong> <?php echo date('d-m-Y',$timatamp) ;?></li>
								
							</ul>							<?php }  ?>
						</div>
					</div>
					<div class="row-fluid">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Purpose</th>
									<th class="hidden-480">Description</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody>							<?php 						  $recieptid=$_SESSION['reciept_no'];							 $query="SELECT * FROM `payment` WHERE `reciept_no`='$recieptid'";            $q1=mysqli_query($conn,$query)or die(mysqli_error());         $Total="";                    while ($row = mysqli_fetch_array($q1)) {            $Total += $row['amount'];           					            														?>
								<tr>
									<td><?php  echo $row['payment_id']; ?></td>
									<td><?php  if( $row['category']=='1'){										echo 'Tuition Fee';									}else { 									echo 'Other Fees' ; } ?></td>
									<td class="hidden-480"><?php echo $row['payment_naration']; ?></td>
									
									<td>ZMK <?php echo $row['amount']; ?></td>
								</tr>			<?php  } 									?>
								
							</tbody>
						</table>
					</div>
					<div class="row-fluid">
						<div class="span4">
							
						</div>
						<div class="span8 invoice-block">
							<ul class="unstyled amounts">
								<li><strong>Sub - Total amount:</strong> ZMK <?php echo  $Total  ;?></li>
								<li><strong>Discount:</strong> 00.00</li>
								<li><strong>VAT:</strong>   </li>
								<li><strong>Grand Total:</strong> ZMK <?php echo $Total ;?></li>
							</ul>
							<br />                          <a class="btn green big hidden-print" href="CollectFees.php">Back <i class="m-icon-big-swapleft m-icon-white"></i></a>
							<a class="btn blue big hidden-print" onclick="javascript:window.print();">Print <i class="icon-print icon-big"></i></a>
							<?php unset($_SESSION['reciept_no']); ?>
						</div>						
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER--> 
		</div>
		<!-- END PAGE -->    
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Metronic by keenthemes.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="media/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="media/js/excanvas.min.js"></script>
	<script src="media/js/respond.min.js"></script>  
	<![endif]-->   
	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<script src="media/js/app.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->
</html>