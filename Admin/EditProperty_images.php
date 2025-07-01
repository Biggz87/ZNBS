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
	<link rel="shortcut icon" href="media/image/favicon.ico" />
	 <link rel="stylesheet" href="css/slim.min.css">

    <style>
        /* center main column */
        html {
            font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        main {
            max-width:400px;
            margin:0 auto;
        }
    </style>

<link rel="stylesheet" type="text/css" href="https://robocrop-v2.firebaseapp.com/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="https://robocrop-v2.firebaseapp.com/robocrop/css/style.css"/>
<link href="assets/css/upload.css" rel="stylesheet" type="text/css"/>

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

					<div class="span4">

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
						
										$propert_id	=$_GET['propert_id'];
		/*
									if(isset($_POST['uploadfiles'])){
												
												echo $name = $image['output']['name'];
echo $data = $image['output']['data'];

// store the file


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
`price_range`, `no_bathrooms`, `no_bedrooms`, `description`, `status`, `owner_id`, `featured`,`Date_posted`) VALUES ('','$category_id','$Condition','$Location_province',
'$Location_area','$Type','$Plot_size','$price_range','$No_rooms','$No_Bathrooms','$Description','$Status','$Owner_id','$Featured','$DatePosted')";
  
    $result3= mysqli_query($conn,$SQL3);
   if($result3){
   
  echo '<div class="alert alert-success"> The Property has been added Successfully</div>';
    		
}else {


			
			echo '<div class="alert alert-danger"> The Property has NOT  been added due to some error</div>';
		
//}

	
	}
	


}*/


?> 
<script>
function addTime(data, ready) {

    // add additional data
    data.meta.now = Date.now();

    // continue saving the data
    ready(data);

}
</script>
				<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>Upload Property Photos</div>

								

							</div>
		
						

							<div class="portlet-body form">
		<!-- BEGIN SAMPLE FORM PORTLET-->   			
													
	<form action="sync.php?prop_id=<?php echo $propert_id ?>" method="post" enctype="multipart/form-data" class="avatar">
	
										
	<div class="span4">
    <h3>Thumnail</h3>

    <div class="slim"
	data-instant-edit="true" 
	data-fetcher="fetch.php"
    data-ratio="16:11"
	data-meta-thumb="1"
	>
 	
	 
         <input type="file" name="slim[]" required />
    </div>
	   
</div>






<div class="span4">
    <h3>Upload new image</h3>

   

    <div class="slim"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php" >
         <input type="file" name="slim[]" required />
		  </div>
    </div>

<div class="span4">
    <h3>Upload new image</h3>

   

    <div class="slim"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
		  </div>
    </div>


<div class="span4">
    <h3>Upload new image</h3>

   

    <div class="slim"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
    </div>
	 </div>

<div class="span4">
    <h3>Upload new image</h3>

   

    <div class="slim"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
    </div>
	 </div>


<div class="span4">
    <h3>Upload new image</h3>

   

    <div class="slim"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
    </div>
	 </div>


<div class="span4">
    <h3>Upload new image</h3>

   

    <div class="slim"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
    </div>
	 </div>

<div class="span4">
    <h3>Upload new image</h3>

   

    <div class="slim"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
    </div>
</div>


<div class="span4">
    <h3>Upload new image</h3>

   

    <div class="slim"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
    </div>
</div>
<div class="span4 control-group" >
    <h3>Upload new image</h3>

   

    <div class="slim"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
    </div>
</div>
<div class="span4 control-group">
    <h3>Upload new image</h3>

   

    <div class="slim"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
    </div>
</div>
<div class="span4 control-group">
    <h3>Upload new image</h3>

   

    <div class="slim controls"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
    </div>
</div>
<div class="span4 control-group">
    <h3>Upload new image</h3>

   

    <div class="slim controls"
	data-instant-edit="true" 
    data-ratio="16:9"	
	data-fetcher="fetch.php">
         <input type="file" name="slim[]" required />
    </div>
</div>

		<div class="12">

										<button type="submit" name="submitNewCourse" class="btn blue">Save</button>

										<button type="button" class="btn">Cancel</button>                            

									</div>

</form>
</div>
</div>
							
											
								

								

								
                                 
								<!-- END FORM-->       

							
							

						

				<!-- END PAGE CONTENT-->         

			

			<!-- END PAGE CONTAINER-->

		</div>
		</div>

		<!-- END PAGE -->  


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