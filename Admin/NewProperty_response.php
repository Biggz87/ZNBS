<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

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

						<?php
											
include 'Get_property_id.php';
											if(isset($_POST['submitNewProperty'])){
$prop_id= getEmpID();
$Owner_id=$_POST['Owner_id'];
 $category_id=$_POST['category_id'];
 $Condition =$_POST['Condition'];
 $Location_province=$_POST['Location_province'];
 $Location_area=$_POST['Location_area'];
 $Type=$_POST['Type'];
 $Plot_size=$_POST['Plot_size'];
 $price_range=$_POST['price_range'];
 $No_rooms =$_POST['No_rooms'];
 $No_Bathrooms=$_POST['No_Bathrooms'];
 $Description=$_POST['Description'];
 $Status =$_POST['Status'];
 $Featured=$_POST['Featured'];
  $DatePosted=date("Y/m/d");



 $SQL3 = "INSERT INTO `property`(`prop_id`, `prop_category_id`, `property_condition`, `location_province`, `location_Area`, `type`, `plot_size`, 
`price_range`, `no_bathrooms`, `no_bedrooms`, `description`, `status`, `owner_id`, `featured`,`Date_posted`) VALUES ('$prop_id','$category_id','$Condition','$Location_province',
'$Location_area','$Type','$Plot_size','$price_range','$No_rooms','$No_Bathrooms','$Description','$Status','$Owner_id','$Featured','$DatePosted')";
  
    $result3= mysqli_query($conn,$SQL3);
   if($result3){
   
  echo '<div class="alert alert-success"> The Property has been added Successfully</div>';
   echo "<script>window.location = 'NewProperty2_images.php?propert_id=".$prop_id."'</script>";
    		
}else {


			
			echo '<div class="alert alert-danger"> The Property has NOT  been added due to some error</div>';
			
			
		
//}

	
	}
	

}


?> 
						<!-- BEGIN SAMPLE FORM PORTLET-->   
																<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>New Property form</div>

								

							</div>
		
						

							<div class="portlet-body form">

								<!-- BEGIN FORM-->

								<form action="#" method="POST" enctype="multipart/form-data" class="form-horizontal">
								
								
								  <div class="control-group">

										<label class="control-label">Owner<span class="required">*</span></label>

										<div class="controls">
<select  name="Owner_id" >
                                                               <Option value="">--Select Owner--</option>
																	<?php 
																$sql="SELECT * FROM `customer_tbl`";
																$q1=mysqli_query($conn,$sql)or die(mysqli_error());
        
        
																while ($row = mysqli_fetch_array($q1)) {
																$fname=$row['first_name'];
																$lname=$row['last_name'];
																$cif_id=$row['cif_id'];
																
																?>
																<option value="<?php echo $cif_id; ?>"> <?php echo $fname; ?>  <?php echo $lname; ?> 
																</option>
																<?php } ?>

																</select>
											

										</div>

									</div>
								
                                   
									 <div class="control-group">

										<label class="control-label">category<span class="required">*</span></label>

										<div class="controls">
<select  name="category_id" >
																<Option >--Select category--</option>
																<?php	$sql="SELECT * FROM `asset_categories`";
																$q1=mysqli_query($conn,$sql)or die(mysqli_error());
        
        
																while ($row = mysqli_fetch_array($q1)) {
																$name=$row['Name'];
												
																$cif_id=$row['category_id'];
																
																?>
																<option value="<?php echo $cif_id; ?>"> <?php echo $name; ?>  
																</option>
																<?php } ?>

																</select>
											

										</div>

									</div>
									 <div class="control-group">

										<label class="control-label">Condition<span class="required">*</span></label>

										<div class="controls">
<select  name="Condition" >
                                                                    <Option value="">--Select Condition--</option>
																	<option value="New">New</option>

																	<option value="Reconditioned">Reconditioned</option>

																</select>
											

										</div>

									</div>

									 <div class="control-group">

										<label class="control-label">LocationProvince<span class="required">*</span></label>

										<div class="controls">
<select  name="Location_province" >
                                                                     <Option value="">--Select Province--</option>
																	<option value="Lusaka">Lusaka</option>

																	<option value="Copper-belt">Copper-belt</option>
																	<option value="Copper-belt">Central</option>
																	<option value="Southern">Southern</option>
																	<option value="Eastern">Eastern</option>
																	<option value="North-Western">North-Western</option>
																	<option value="Western">Western</option>
																	<option value="Luapula">Luapula</option>
																	<option value="Northern">Northern</option>
																	<option value="Muchinga">Muchinga</option>

																</select>
											

										</div>

									</div>
									
									<div class="control-group">

										<label class="control-label">Location area<span class="required">*</span></label>

										<div class="controls">

											<input type="text"  name="Location_area" class="span6 m-wrap" required />

											

										</div>

									</div>
									 <div class="control-group">

										<label class="control-label">type<span class="required">*</span></label>

										<div class="controls">
<select  name="Type" >
                                                                    <Option value="">--Select Type--</option>
																	<option value="Male">House</option>

																	<option value="Female">Plot</option>

																</select>
											

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">Plot Size<span class="required">*</span></label>

										<div class="controls">

											<input type="text"  name="Plot_size" class="span6 m-wrap"  required />

											

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">Price Range<span class="required">*</span></label>

										<div class="controls">

											<input type="text"  name="price_range" class="span6 m-wrap" required />

											

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">Number of Rooms<span class="required">*</span></label>

										<div class="controls">

											<input type="text"   name="No_rooms" class="span6 m-wrap" required />

											

										</div>

									</div>
									

									<div class="control-group">

										<label class="control-label">No of Bathrooms<span class="required">*</span></label>

										<div class="controls">

											<input type="text" class="span6 m-wrap"  name="No_Bathrooms" required></span>

										</div>

									</div>
									

                                 
								
													
								
												
									
									<div class="control-group">

													<label class="control-label">Discription <span class="required">*</span></label>

													<div class="controls">

														<textarea class="span6 m-wrap" rows="5" name="Description" required></textarea>

														

													</div>

												</div>
												<div class="control-group">

													<label class="control-label">Status <span class="required">*</span></label>

													<div class="controls">

														<select type="text" class="span6 m-wrap"  name="Status" required >
														 <Option value="">--Select Status--</option>
														<option value="Diploma"> Available</option>
														<option value="Certificate"> Removed</option>
                                                        <option value="Certificate"> Sold</option>
														<option value="Diploma"> Not available</option>
														
																

											</select>
														

													</div>
													</div>
													<div class="control-group">

													<label class="control-label">featured <span class="required">*</span></label>

													<div class="controls">

														<select type="text" class="span6 m-wrap"  name="Featured" required >
														<Option value="">--Select Option--</option>
														<option value="Yes"> Yes</option>
                                                        <option value="No"> No</option>
														
														
																

											</select>
														

													</div>
													</div>


													
												
												
												<div class="form-actions">

										<button type="submit" name="submitNewProperty" class="btn blue">Save</button>

										<button type="button" class="btn">Cancel</button>                            

									</div>

								</form>
												</div>
									
								

								

								
                                 
								<!-- END FORM-->       

							
							

						

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

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script type="text/javascript" src="media/js/jquery.validate.min.js"></script>

	<script type="text/javascript" src="media/js/additional-methods.min.js"></script>

	<script type="text/javascript" src="media/js/select2.min.js"></script>

	<script type="text/javascript" src="media/js/chosen.jquery.min.js"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<script src="media/js/app.js"></script>

	<script src="media/js/form-validation.js"></script> 

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