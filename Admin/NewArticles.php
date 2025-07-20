<?php define('jhshjgdhgdhgdhhj',TRUE); include '../includes/sessions.php';
	
 ?><!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Code It CMS</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
								<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
                                
								<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
						
								<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
								 <link rel="stylesheet" href="css/slim.min.css">
								 
                                <style>body {
    font-family: 'Lato', sans-serif
}

h1 {
    margin-bottom: 40px
}

label {
    color: #333
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px
}

.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px
}

.card {
    margin-left: 3px;
    margin-right: 3px
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
								<?php

  
  
include "../includes/Dbconnect2.php";
											
						

											if(isset($_POST['submitNewArticles'])){
												
									
							
												




										

 $Title=$_POST['title'];
$content =$_POST['content'];
$sub_cat=$_POST['sub_cat'];
 $category=$_POST['Category'];
 $status=$_POST['status'];
 $documentname=$_POST['Documenttitle'];
 $youtube=$_POST['youtube'];

$img="";
 $path="../Uploads/Document/";
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
$document_name='';
if($_FILES['Ducument_upload']['name']){
//$document_name = round(microtime(true)).$_FILES['Ducument_upload']['name'];


$document_name = round(microtime(true)).$_FILES['Ducument_upload']['name'];
$document = $path.$document_name;
}


  
  $Art_id=0;

move_uploaded_file($_FILES['Ducument_upload']['tmp_name'],$document);

$SQL4 ="INSERT INTO `articles`(`article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, `At_status`, `Document`, `ytube`)
VALUES(:Art_id,:Title,:content,:nameofFile,:sub_cat,:category,:status,:document,:youtube)";
  
 
  $stmt = $conn->prepare($SQL4);
  $stmt->bindParam(":Art_id",$Art_id);
$stmt->bindParam(":Title",$Title);
$stmt->bindParam(":content",$content);
$stmt->bindParam(":nameofFile",$img);
$stmt->bindParam(":sub_cat",$sub_cat);
$stmt->bindParam(":category",$category);
$stmt->bindParam(":status",$status);
$stmt->bindParam(":document",$document_name);
$stmt->bindParam(":youtube",$youtube);
if ($stmt->execute()) {
   
  echo '<div class="alert alert-success"> The Article has been added Successfully</div>';
 echo "<script>window.location = 'ArticleList.php?status=Yes'</script>";
    		
}else {

//print_r($stmt->errorInfo());
			
		echo "<script>window.location = 'ArticleList.php?status=No'</script>";
			
			
		


	
	}
	

}


?> 
                                <div class="container"> <div class=" text-center mt-5 ">
        <h1>New Article</h1>
    </div>
    <div class="row ">
        <div class="col-lg-10 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" action="" method="POST" enctype="multipart/form-data" role="form">
					
                            <div class="controls">
						
                                
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_name">Title *</label>
										<input id="form_name" type="text" name="title" class="form-control" placeholder="Please enter the title here *" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                     <div class="row">
										  <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Category *</label> <select  name="Category" class="form-control" onchange="subcatategory()" id="Category" >
										
                                                                     <Option value="">--Select Category--</option>
																<?php 
																$sql="SELECT `ID`, `Name` FROM `at_categories`";
																	$stmt = $conn->prepare($sql);
																	$stmt->execute();
																	while($row = $stmt->fetch()){
																	 
																$name=$row['Name'];
																$id=$row['ID'];
																
																?>
																<option value="<?php echo $id; ?>"> <?php echo $name ; ?>
																</option>
																<?php } ?>

																	
																</select>
											 </div>
                                    </div>
									  <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="form_email">Sub category *</label>
										<select id="subcat" class="form-control" name="sub_cat" >
                                                                     <Option value="">--Select SubCategory--</option>
																	 
																	
																	
																</select>
											 </div>
                                    </div>
									
									
										
                                </div>
								 <div class="row">
                                    <div class="col-md-12">
									<div class="form-group"> <label for="form_email">Content *</label>
									<textarea  class="form-group" rows="20" id="summernote"  name="content" required></textarea>
									</div>
                                    </div>
                                    
                                </div>
                           
								 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_email">Youtube Video </label> 
										<textarea  class="form-control" style="margin-top: 5px;"  rows="5"    name="youtube" placeholder="Video Code Here"></textarea>
										</div>
                                    </div>
                                  
                                </div>
								 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_email">Document </label>
										
	                                  <input type="text"  name="Documenttitle" placeholder='Document Name' class="form-control"  />
									  <br>
									  <input type="file" name="Ducument_upload" id="bluebook" class="form-control" accept=".pdf" >
                                     </div> 
										</div>
                                    </div>
										 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_email">Status </label>
										
	                                 
                                                 <select  name="status" class="form-control">
                                                                     <Option value="">--Select Status--</option>
																	<option value="Published">Published</option>

																	<option value="Unpublished">Unpublished</option>
																	

																</select>
                                     </div> 
										</div>
                                    </div>
									<div class="row">
				
                                  
                                   
                                   <div class="col-md-6"><a href="ArticleList.php"><button  name="submitNewArticles" class="btn btn-success btn-send pt-2 btn-block " >Back</button></a></div>
                                    <div class="col-md-6"> <input type="submit" name="submitNewArticles" class="btn btn-success btn-send pt-2 btn-block " value="Save"> </div>
                                </div>
                                  
                                </div>
                               
                            </div>
                        </form>
                    
					
					</div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
								<script src="media/js/lists.js"></script>
	 
	<script>


    $(document).ready(function() {
        $('#summernote').summernote();
    });
	   


    </script>
	<script src="js/slim.kickstart.min.js"></script>

                                </body>
                            </html>