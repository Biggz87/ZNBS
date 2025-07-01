<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Metronic | Data Tables - Editable Tables</title>

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

	<link rel="stylesheet" href="media/css/DT_bootstrap.css" />

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<?php
$vac_id=$_GET['vacancy_id'];
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

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							Job Description  List
								<small>For <?php  								
 $propertySQL="SELECT `Job_id`, `Title`, `Date_posted`, `Closingdate`, `HowToApply`, `Status` FROM `vacancy` WHERE `Job_id`='$vac_id'";
											$results=mysqli_query($conn,$propertySQL);
											
											while($row5=mysqli_fetch_array($results)){
												echo $row5['Title'];
											}
											 
            ?></small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">Home</a> 

								<i class="icon-angle-right"></i>

							</li>

							
							<li><a href="#">List Items</a></li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->
				
			<?php
			
$descriptionID=$_GET['decriptid'];
$del=$_GET['delete'];
if($del=='Y'){
	
	  $deleteQuery="DELETE FROM `vanancy_descitipn` WHERE `vac_descript_id`='$descriptionID'";
	 $result3= mysqli_query($conn,$deleteQuery);
   if($result3){
   
echo '<div class="alert alert-success">Description has been  Deleted successfully</div>';
 
    		
}
	
	}
	
	
			
			
$status=$_GET['status'];
			if($status=='Yes'){
	echo '<div class="alert alert-success"> Document  has been added successfully</div>';
}elseif($status=='No'){
	echo '<div class="alert alert-danger"> Document has not  been added </div>';
} ?>

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-edit"></i>Job Description List</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<a data-toggle="modal" href="#NewDescription" ><button " class="btn green">

										Add New <i class="icon-plus"></i>

										</button></a>

									</div>

									<div class="btn-group pull-right">

										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>

										</button>

										<ul class="dropdown-menu pull-right">

											<li><a href="#">Print</a></li>

											<li><a href="#">Save as PDF</a></li>

											<li><a href="#">Export to Excel</a></li>

										</ul>

									</div>

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											

											<th>Desctript ID</th>
											<th>Description</th>
											

											


											<th>Action</th>

										</tr>

									</thead>

									<tbody>
                                

                                <?php   
								
 $propertySQL="SELECT `vac_descript_id`, `Description`, `vanancy_id` FROM `vanancy_descitipn` WHERE `vanancy_id`='$vac_id'";
											$results=mysqli_query($conn,$propertySQL);
											
											while($row5=mysqli_fetch_array($results)){
											 
            ?>
										<tr class="">
                                             <td><?php  echo $row5['vac_descript_id']; ?></td>
											<td><?php  echo $row5['Description']; ?></td>

										
											


											<td><div class="btn-group pull-right">

										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>

										</button>

										<ul class="dropdown-menu pull-right">

											<li><a  data-toggle="modal" href="#EditDescription" onclick="outDetails(<?php  echo $row5['vac_descript_id']; ?>)">Edit Details</a></li>

											
											<li><a  onclick="return confirm('Are You sure you want to delete this item')" href="EditDescription.php?decriptid=<?php  echo $row5['vac_descript_id']; ?>&delete=Y&vacancy_id=<?php echo $vac_id; ?>">Delete Item</a></li>
											
											

											

										</ul>

									</div></td>

										</tr>

									<?php } 		 ?>

										

									</tbody>

								</table>

							</div>

						</div>
<div id="EditDescription" class="modal hide fade" tabindex="-1" data-width="760">

									<div class="modal-header">

										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

										<h3>Edit Description</h3>

									</div>

									<div class="modal-body">

										<div class="row-fluid">

											<div class="span12">

												<h4>Description</h4>
												
                                                 <input id="Detailid" type="hidden" />
												<p><textarea id="DetailBox" rows="10" type="text" class="span12 m-wrap"></textarea></p>

												

											</div>

											
										</div>
										<div id="DescriptionFeedback"> </div> 

									</div>

									<div class="modal-footer">

										<button type="button" data-dismiss="modal" class="btn">Close</button>

										<button type="button" class="btn blue" onclick="saveDescription()">Save changes</button>

									</div>

								</div>

						<!-- END EXAMPLE TABLE PORTLET-->

							<div id="NewDescription"  class="modal hide fade" tabindex="-1" data-width="760">

									<div class="modal-header">

										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

										<h3>New Vacancy Description</h3>

									</div>

									<div class="modal-body">

										<div class="row-fluid">

											<div class="span12">

												<h4>New Vacancy Description</h4>
												
                                                 
												<p><textarea id="NewDescriptionbox" rows="10" type="text" class="span12 m-wrap"></textarea></p>

												

											</div>

											
										</div>
										<div id="NewDescriptopnFeedback"> </div> 

									</div>

									<div class="modal-footer">

										<button type="button" data-dismiss="modal" class="btn">Close</button>

										<button type="button" class="btn blue" onclick="NewDescription(<?php echo $vac_id; ?>)">Save</button>

									</div>

								</div>
					</div>

				</div>

				<!-- END PAGE CONTENT -->

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

	<script type="text/javascript" src="media/js/select2.min.js"></script>

	<script type="text/javascript" src="media/js/jquery.dataTables.js"></script>

	<script type="text/javascript" src="media/js/DT_bootstrap.js"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="media/js/app.js"></script>

	<script src="media/js/table-editable.js"></script>  
<script>

function outDetails(detailID){
	
	
	// ;
    $.ajax({
       type: "POST",
       url: 'do_getDetails.php',
       data: "detailID="+detailID,
       success:  function(data)
       {
         
			
			document.getElementById("Detailid").value=detailID;
			document.getElementById("DetailBox").value=data;
       
	   }
	   
	   });
	
	
	
}

function saveDescription(){
	
	var DetailId=document.getElementById("Detailid").value;
	var Description=document.getElementById("DetailBox").value;
	
	if(Description.trim()==""){
		
		document.getElementById("DescriptionFeedback").innerHTML='<div class="alert alert-danger"> Enter a Description</div>';
	}else{
	// ;
    $.ajax({
       type: "POST",
       url: 'do_saveDecriptionchang.php',
       data: "detailID="+DetailId+"&Description="+Description,
       success:  function(data)
       {
		   console.log(data);
         if(data.trim()=="success"){
			
			document.getElementById("DescriptionFeedback").innerHTML='<div class="alert alert-success"> The Description Saved Successfully</div>';
			
	   }
	   else{
		  document.getElementById("DescriptionFeedback").innerHTML='<div class="alert alert-danger"> The Description not saved</div>'; 
	   }
	   }
	   
	   });
	
	
	}
}

function NewDescription(vacancyid){
	
	
	var Description=document.getElementById("NewDescriptionbox").value;
	// ;
	
	if(Description.trim()==""){
		
		document.getElementById("NewDescriptopnFeedback").innerHTML='<div class="alert alert-danger"> Enter a Description</div>';
	}else{
    $.ajax({
       type: "POST",
       url: 'do_new_description.php',
       data: "vacancyid="+vacancyid+"&Description="+Description,
       success:  function(data)
       {
		   console.log(data);
         if(data.trim()=="success"){
			
			document.getElementById("NewDescriptopnFeedback").innerHTML='<div class="alert alert-success"> The Qualification  Saved Successfully</div>';
			
	   }
	   else{
		  document.getElementById("NewDescriptopnFeedback").innerHTML='<div class="alert alert-danger"> The Qualification not saved</div>'; 
	   }
	   }
	   
	   });
	
	}
	
}
</script>	

	<script>

		jQuery(document).ready(function() {       

		   App.init();

		   TableEditable.init();

		});

	</script>

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>