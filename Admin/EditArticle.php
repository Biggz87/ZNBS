<?php include '../includes/sessions.php';?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Code it Content Management System</title>

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
	<!-- wysiayge -->
	
	<!-- wysisyg css-->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="wys/css/froala_editor.css">
  <link rel="stylesheet" href="wys/css/froala_style.css">
  <link rel="stylesheet" href="wys/css/plugins/code_view.css">
  <link rel="stylesheet" href="wys/css/plugins/draggable.css">
  <link rel="stylesheet" href="wys/css/plugins/colors.css">
  <link rel="stylesheet" href="wys/css/plugins/emoticons.css">
  <link rel="stylesheet" href="wys/css/plugins/image_manager.css">
  <link rel="stylesheet" href="wys/css/plugins/image.css">
  <link rel="stylesheet" href="wys/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="wys/css/plugins/table.css">
  <link rel="stylesheet" href="wys/css/plugins/char_counter.css">
  <link rel="stylesheet" href="wys/css/plugins/video.css">
  <link rel="stylesheet" href="wys/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="wys/css/plugins/file.css">
  <link rel="stylesheet" href="wys/css/plugins/quick_insert.css">
  <link rel="stylesheet" href="wys/css/plugins/help.css">
  <link rel="stylesheet" href="wys/css/third_party/spell_checker.css">
  <link rel="stylesheet" href="wys/css/plugins/special_characters.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
	

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<?php
$Art_id=$_GET['articleid'];
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
											
$page=$_GET['page'];
											if(isset($_POST['submitNewArticles'])){
												
												
	require_once('async_addpic.php');											// let's create some shortcuts


// store the file

										

 $Title=$_POST['title'];
 $content =$_POST['content'];
 $sub_cat=$_POST['sub_cat'];
 $category=$_POST['Category'];
 $status=$_POST['status'];

 $path="../Uploads/Document/";
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
$document = $path.round(microtime(true)).$_FILES['Ducument_upload']['name'];

$documentname=$_FILES['Ducument_upload']['name'];
  
  



 $SQL3 = "UPDATE `articles` SET `At_Title`='$Title',`At_content`='$content',`At_image`=if(LENGTH('$nameofFile')=0,`At_image`,'$nameofFile'),`At_sub_cat`='$sub_cat',
`At_category`='$category',`At_status`='$status',`Document`=if(LENGTH('$documentname')=0,`Document`,'$document') WHERE `article_id`='$Art_id'";
  move_uploaded_file($_FILES['Ducument_upload']['tmp_name'],$document);
 
    $result3= mysqli_query($conn,$SQL3);
   if($result3){
   
  
 echo "<script>window.location = 'ArticleList".$page.".php?statusedit=Yes'</script>";
    		
}else {


			
			 echo "<script>window.location = 'ArticleList".$page.".php?statusedit=No</script>";
			
			
		
//}

	
	}
	

}


?> 
						<!-- BEGIN SAMPLE FORM PORTLET-->   
																<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>Edit Article</div>

								

							</div>
		
						

							<div class="portlet-body form">

								<!-- BEGIN FORM-->
   <?php   
 $propertySQL="SELECT * FROM `articles` INNER JOIN `at_categories` ON `articles`.`At_category`=`at_categories`.`ID` INNER JOIN `sub_category` ON `sub_category`.`Sub_id`=`articles`.`At_sub_cat` WHERE `article_id`='$Art_id' ";
											$results=mysqli_query($conn,$propertySQL);
											
											while($row5=mysqli_fetch_array($results)){
											 
            ?>
								
								<form action="#" method="POST" enctype="multipart/form-data" class="form-horizontal">
								
							
								  <div class="control-group">

										<label class="control-label">Title<span class="required">*</span></label>

										<div class="controls">
									
                                                               
											<input type="text" value="<?php echo $row5['At_Title'] ?>" name="title" class="span6 m-wrap" required />

										</div>

									</div>
								
                                   
								
									 <div class="control-group">

										<label class="control-label">Category<span class="required">*</span></label>

										<div class="controls">
										<select  name="Category" onchange="subcatategory()" id="Category" >
                                                                     <Option value="<?php echo $row5['ID'] ?>"><?php echo $row5['Name'] ?></option>
																	<?php 
																$sql="SELECT `ID`, `Name` FROM `at_categories`";
																$q1=mysqli_query($conn,$sql)or die(mysqli_error());
        
        
																while ($row = mysqli_fetch_array($q1)) {
																$name=$row['Name'];
																$id=$row['ID'];
																
																?>
																<option value="<?php echo $id; ?>"> <?php echo $name ; ?>
																</option>
																<?php } ?>

																	
																</select>
											

										</div>

									</div>
									 <div class="control-group">

										<label class="control-label">Sub Category<span class="required">*</span></label>

										<div class="controls">
										<select id="subcat" name="sub_cat" >
										<Option value="<?php echo $row5['Sub_id'] ?>"><?php echo $row5['Sub_name'] ?></option>
                                                                     <Option value="">--Select SubCategory--</option>
																	 
																	
																	
																</select>
											

										</div>

									</div>
										<div class="control-group">

										<label class="control-label">Content<span class="required">*</span></label>

										<div class="controls">
                                      <div id="editor">
   
										  <textarea id='edit' style="margin-top: 30px;" name='content' placeholder="Type some text">
											<?php echo $row5['At_content'] ?>
										  </textarea>

										
									   
									  </div>
											

										</div>

									</div>
									<div class="control-group">

										<label class="control-label">Picture</label>

										<div class="controls span6">
                                      <div class="slim"
										 data-label="Drop your image here"
										 data-fetcher="fetch.php"
										 data-instant-edit="true" 
										 data-size="1200,795"
										 data-ratio="28:25">
										<input type="file" name="slim[]"  />
										<img src="images/<?php echo $row5['At_image'] ?>">
									</div>
											

										</div>
										</div>
										
										
									

									

									 <div class="control-group">

										<label class="control-label">Status<span class="required">*</span></label>

										<div class="controls">
									<select  name="status" >
                                                                   <Option value="<?php echo $row5['At_status'] ?>"><?php echo $row5['At_status'] ?></option>
																	<option value="Published">Published</option>

																	<option value="Unpublished">Unpublished</option>
																	

																</select>
											

										</div>

									</div>
									<div class="control-group">
									
           <label class="control-label">Document(pdf only)</label>
		   <div class="controls">
   <?php if($row5['Document']){ ?><a href="<?php  echo $row5['Document']; ?>" target="_new"> View Existing File </a> <?php } ?><input type="file" name="Ducument_upload" id="bluebook" accept=".pdf" >
						</div>
						</div>
									
												
												
												<div class="form-actions">

										<button type="submit" name="submitNewArticles" class="btn blue">Save</button>

										<a href="ArticleList.php" ><button type="button" class="btn">Cancel</button></a>

									</div>

								</form>
											<?php } ?>
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

			2020 &copy; Code-It.

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

  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

  <script type="text/javascript" src="wys/js/froala_editor.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/file.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/quick_insert.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/quote.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/help.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/print.min.js"></script>
  <script type="text/javascript" src="wys/js/third_party/spell_checker.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/special_characters.min.js"></script>
  <script type="text/javascript" src="wys/js/plugins/word_paste.min.js"></script>
   <script>

   (function () {
	   
	
      const editorInstance = new FroalaEditor('#edit', {
		   // Set the file upload URL.
        imageUploadURL: '/znbs/Admin/upload_image.php',

        imageUploadParams: {
          id: 'my_editor'
        },
		 // Set request type.
    imageUploadMethod: 'POST',

    // Set max image size to 5MB.
    imageMaxSize: 5 * 1024 * 1024,

    // Allow to upload PNG and JPG.
    imageAllowedTypes: ['jpeg', 'jpg', 'png'],
        enter: FroalaEditor.ENTER_P,
        placeholderText: null,
        events: {
          initialized: function () {
            const editor = this
            this.el.closest('form').addEventListener('submit', function (e) {
          //   e.preventDefault()
			console.log(editor.$oel.val())
			var content=editor.$oel.val();
		
			
			
		
			
             
            })
          }
        }
		
		
      })
    })
	();
	
  


  

	
	

 
</script>
<!-- END BODY -->

</html>