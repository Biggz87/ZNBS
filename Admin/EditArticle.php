<?php  include '../includes/sessions.php';$Art_id=$_GET['articleid']; 
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
    margin-left: 10px;
    margin-right: 10px
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
		
		
						<?php
						include "../includes/Dbconnect2.php";
											
$page=$_GET['page'];
											if(isset($_POST['submitNewArticles'])){
												
												
												// let's create some shortcuts



										

 $Title=$_POST['title'];
 $content =$_POST['content'];
 $sub_cat=$_POST['sub_cat'];
 $category=$_POST['Category'];
 $status=$_POST['status'];
  $youtube=$_POST['youtube'];

 $path="../Uploads/Document/";
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
$fn=$_FILES['Ducument_upload']['name'];
$fname=round(microtime(true)).$_FILES['Ducument_upload']['name'];
$document = $path.$fname;

$documentname=$_FILES['Ducument_upj  load']['name'];

  $Somename="";
$lengthImage=strlen(trim($fn));
$lengthFile=strlen(trim(" "));


 $SQL3 = "UPDATE `articles` SET `At_Title`=:Title,`At_content`=:content,`At_image`=if('$lengthFile'=0,`At_image`,:nameofFile),`At_sub_cat`=:sub_cat,
`At_category`=:category,`At_status`=:status,`Document`=if('$lengthImage'=0,`Document`,:document),`ytube`=:youtube  WHERE `article_id`=:Art_id";

$stmt = $conn2->prepare($SQL3);
$stmt->bindParam(":Title",$Title);
$stmt->bindParam(":content",$content);
$stmt->bindParam(":nameofFile",$nameofFile);
$stmt->bindParam(":sub_cat",$sub_cat);
$stmt->bindParam(":category",$category);
$stmt->bindParam(":status",$status);
$stmt->bindParam(":document",$Somename);
$stmt->bindParam(":Art_id",$Art_id);
$stmt->bindParam(":youtube",$youtube);


move_uploaded_file($_FILES['Ducument_upload']['tmp_name'],$document);

if ($stmt->execute()) {
 
 
 //print_r($stmt->errorInfo());
 echo "<script>window.location = 'ArticleList".$page.".php?statusedit=Yes'</script>";
    		
}else {


			
			 echo "<script>window.location = 'ArticleList".$page.".php?statusedit=No</script>";
			
			
		
//}

	
	}
	

}


?> 
                                <div class="container"> <div class=" text-center mt-5 ">
        <h1>Edit Article</h1>
    </div>
    <div class="row ">
        <div class="col-lg-10 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
						<?php   
 $propertySQL="SELECT * FROM `articles` INNER JOIN `at_categories` ON `articles`.`At_category`=`at_categories`.`ID` INNER JOIN `sub_category` ON `sub_category`.`Sub_id`=`articles`.`At_sub_cat` WHERE `article_id`=:Art_id";
											$stmt = $conn2->prepare($propertySQL);
											$stmt->bindParam(":Art_id",$Art_id);
											$stmt->execute();
											while($row5 = $stmt->fetch()){
											 
											 
            ?>
                        <form id="contact-form" action="" method="POST" enctype="multipart/form-data" role="form">
					
                            <div class="controls">
						
                                
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_name">Title *</label>
										<input id="form_name" type="text" name="title" class="form-control" value="<?php echo $row5['At_Title'] ?>" placeholder="Please enter the title here *" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                     <div class="row">
										  <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Category *</label> <select  name="Category" class="form-control" onchange="subcatategory()" id="Category" >
										
                                                                     <Option value="<?php echo $row5['ID'] ?>"><?php echo $row5['Name'] ?></option>
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
                                                                   <Option value="<?php echo $row5['Sub_id'] ?>"><?php echo $row5['Sub_name'] ?></option>
                                                                     <Option value="">--Select SubCategory--</option>
																	 
																	
																	
																</select>
																	 
																	
																	
																
											 </div>
                                    </div>
									
									
										
                                </div>
								 <div class="row">
                                    <div class="col-md-12">
									<div class="form-group"> <label for="form_email">Content *</label>
									<textarea  class="form-group" rows="20" id="summernote"  name="content" required>
									<?php echo $row5['At_content'] ?>
									</textarea>
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
										<?php if($row5['Document']){ ?>	<a href="../Uploads/Document/<?php echo $row5['Document'] ?>"><?php echo $row5['Document'] ?></a><?php } ?>
										
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
                                                                     
																	 <Option value="<?php echo $row5['At_status'] ?>"><?php echo $row5['At_status'] ?></option>
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
											<?php } ?>
                    
					
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