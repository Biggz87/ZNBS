<?php include '../includes/sessions.php';?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<?php 
$emp_id=$_GET['emp_id'];
?>
<head>

	<meta charset="utf-8" />

	<title>Metronic | Form Stuff - Form Validation</title>

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
	 <link rel="stylesheet" href="css/slim.min.css">

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link rel="stylesheet" type="text/css" href="media/css/select2_metro.css" />

	<link rel="stylesheet" type="text/css" href="media/css/chosen.css" />

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

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

						

					

					</div>

				</div>

				<!-- END PAGE HEADER-->
            
				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

			<div class="span12">

						<!-- BEGIN SAMPLE FORM PORTLET-->   
											<?php 
require_once('async_empic.php');

											if(isset($_POST['submitNewCourse'])){
            
{
$Title=$_POST['Title'];	
$first_name=$_POST['first_name'];
 $last_name =$_POST['last_name'];
 $date_of_birth =$_POST['date_of_birth'];
 $email=$_POST['email'];
 $mobile_number=$_POST['mobile_number'];
 $whatsapp=$_POST['whatsapp'];
 $address1=$_POST['address1'];
 $address2=$_POST['address2'];
 $city_town =$_POST['city_town'];
 $genda =$_POST['genda'];
 $country=$_POST['country'];
 $date_joined =$_POST['date_joined'];
 $jobRole=$_POST['jobRole'];
$profile=$_POST['profile'];
$category=$_POST['Category'];
$employee_number=$_POST['employee_number'];

$SQL3 = "UPDATE `employees_tbl` SET `emp_id`='$employee_number', `Title`='$Title',`first_name`='$first_name',`last_name`='$last_name',`date_of_birth`='$date_of_birth',
`email`='$email',`mobile_number`='$mobile_number',`whatsapp`='$whatsapp',`address1`='$address1',`address2`='$address2',`city_town`='$city_town',
`genda`='$genda',`country`='$country',`jobRole`='$jobRole' ,`Category`='$category',`Picture`='$nameofFile',`brief_profile`='$profile' WHERE `emp_id`='$emp_id'";
  
    $result3= mysqli_query($conn,$SQL3);
   if($result3){
   
  echo '<div class="alert alert-success"> The Emplyeee has been added Successfully</div>';
    		
}else {


			
			echo '<div class="alert alert-danger"> The Employee has NOT  been added due to some error</div>';
		
//}

	
	}
	
}
}


?> 

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>Edit Employee form</div>

								

							</div>
		
						

							<div class="portlet-body form">

								<!-- BEGIN FORM-->

								<form action="#" method="POST" enctype="multipart/form-data" class="form-horizontal">
								
								 <?php

								 $userqry="SELECT * FROM `employees_tbl` WHERE `emp_id`='$emp_id'";
											$results=mysqli_query($conn,$userqry);
											
											while($row6=mysqli_fetch_array($results)){
											
											?>
								  <div class="control-group">

										<label class="control-label">Employee Number<span class="required">*</span></label>

										<div class="controls">

											<input type="text" value="<?php echo $row6['emp_id']; ?>"  name="employee_number" class="span6 m-wrap"  />

											

										</div>

									</div>
									<div class="control-group">

													<label class="control-label">Title<span class="required">*</span></label>

													<div class="controls">

														<select  name="Title" required>
                                                                     <option value="<?php echo $row6['Title']; ?>"><?php echo $row6['Title']; ?></option>
																	<option value="Mr.">Mr.</option>
																	<option value="Mrs.">Mrs.</option>
																	<option value="Ms.">Ms.</option>
																	<option value="Dr.">Dr. </option>
																	<option value="Prof.">Prof. </option>
																	

																</select>

														

													</div>

												</div>
								
								<div class="control-group ">
									<div class="span4">

										<label class="control-label">Picture</label>

										<div class="controls span6">
                                      <div class="slim"
										 data-label="Drop your image here"
										 data-fetcher="fetch.php"
										 data-instant-edit="true" 
										 data-size="300,300"
										 data-ratio="1:1">
										<input type="file" name="slim[]"  />
										<img src="../images/staff/<?php echo $row6['Picture']; ?>">
									</div>
											

										</div>
										</div>
										</div>
                                    <div class="control-group">

										<label class="control-label">First Name<span class="required">*</span></label>

										<div class="controls">

											<input type="text" value="<?php echo $row6['first_name']; ?>" name="first_name" class="span6 m-wrap" required />

											

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">Last Name<span class="required">*</span></label>

										<div class="controls">

											<input type="text"  name="last_name" value="<?php echo $row6['last_name']; ?>" class="span6 m-wrap" required />

											

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">Date of Birth<span class="required">*</span></label>

										<div class="controls">

											<input type="text"  name="date_of_birth" value="<?php echo $row6['date_of_birth']; ?>" class="span6 m-wrap" required />

											

										</div>

									</div>
									<div class="control-group">

													<label class="control-label">Gender <span class="required">*</span></label>

													<div class="controls">

														<select  name="genda" >
                                                                    <option value="<?php echo $row6['genda']; ?>"><?php echo $row6['genda']; ?></option>
																	<option value="Male">Male</option>

																	<option value="Female">Female</option>

																</select>

														

													</div>

												</div>
									
									<div class="control-group">

										<label class="control-label">Email<span class="required">*</span></label>

										<div class="controls">

											<input type="text" value="<?php echo $row6['email']; ?>"  name="email" class="span6 m-wrap" required />

											

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">Mobile Number<span class="required">*</span></label>

										<div class="controls">

											<input type="text" value="<?php echo $row6['mobile_number']; ?>"  name="mobile_number" class="span6 m-wrap" required />

											

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">Whatsapp Line</label>

										<div class="controls">

											<input type="text"  name="whatsapp" value="<?php echo $row6['whatsapp']; ?>" class="span6 m-wrap"  />

											

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">Physical address Line 1<span class="required">*</span></label>

										<div class="controls">

											<input type="text"  name="address1" value="<?php echo $row6['address1']; ?>" class="span6 m-wrap" required />

											

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">Physical address Line 2<span class="required">*</span></label>

										<div class="controls">

											<input type="text"  name="address2" value="<?php echo $row6['address2']; ?>" class="span6 m-wrap" required />

											

										</div>

									</div>
									

									<div class="control-group">

										<label class="control-label">City or Town<span class="required">*</span></label>

										<div class="controls">

											<input type="text" class="span6 m-wrap" value="<?php echo $row6['city_town']; ?>"  name="city_town" required></span>

										</div>

									</div>
									

                                 
								
													
								
												
									<div class="control-group">

										<label class="control-label">Country</label>

										<div class="controls">

											<select class="span6 m-wrap" data-placeholder="Choose a Category" name="country" required tabindex="1">

												<option value="<?php echo $row6['country']; ?>"> <?php echo $row6['country']; ?>
																</option>
																<?php 
																$sql="SELECT * FROM `country`";
																$q1=mysqli_query($conn,$sql)or die(mysqli_error());
        
        
																while ($row = mysqli_fetch_array($q1)) {
																$name=$row['nicename'];
																?>
																<option value="<?php echo $name; ?>"> <?php echo $name ; ?>
																</option>
																<?php } ?>

											</select>

										</div>

									</div>
									<div class="control-group">

													<label class="control-label">Job Role <span class="required">*</span></label>

													<div class="controls">

														<input type="text"   value="<?php echo $row6['jobRole']; ?>" class="span6 m-wrap"  name="jobRole" required ><span for="email" class="validate-inline ok valid"></span>

														

													</div>

													
												</div>
												
												<div class="control-group">

													<label class="control-label">Category <span class="required">*</span></label>

													<div class="controls">

														<select type="text" class="span6 m-wrap"  name="Category" required >
														<option value="<?php echo $row6['Category']; ?>"> <?php echo $row6['Category']; ?>
													       <option value="Senior Management">Senior Management</option>
                                                        <option value="Management">Management</option>
														<option value="Employee">Employee</option>
														
														
																

											</select>
														

													</div>
													</div>
													<div class="control-group">

													<label class="control-label">Profile</label>

													<div class="controls">

														<textarea type="text" rows="10" class="span6 m-wrap"  name="profile"  ><?php echo $row6['brief_profile']; ?>
														
														
																

											</textarea>
														

													</div>
													</div>
													
									
								<?php } ?>

								
<div class="form-actions">

										<button type="submit" name="submitNewCourse" class="btn blue">Save</button>

										<a href="Employees.php"><button type="button" class="btn">Back to List</button></a>                            

									</div>

								</form>

								<!-- END FORM-->       

							</div>

						</div>

						<!-- END SAMPLE FORM PORTLET-->

					</div>        
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

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script type="text/javascript" src="media/js/jquery.validate.min.js"></script>

	<script type="text/javascript" src="media/js/additional-methods.min.js"></script>

	<script type="text/javascript" src="media/js/select2.min.js"></script>

	<script type="text/javascript" src="media/js/chosen.jquery.min.js"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<script src="media/js/app.js"></script>

	<script src="media/js/form-validation.js"></script> 
	<script src="media/js/lists.js"></script>
    <script src="js/slim.kickstart.min.js"></script>	

	<!-- END PAGE LEVEL STYLES -->    

	<script>

		jQuery(document).ready(function() {   

		   // initiate layout and plugins

		   App.init();

		   FormValidation.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->   

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>