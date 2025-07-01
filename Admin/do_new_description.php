<?php 
include'../includes/Dbconnect.php';
$vacancyID=$_POST['vacancyid'];

$Description=$_POST['Description'];
                        
 $propertySQL="INSERT INTO `vanancy_descitipn`(`vac_descript_id`, `Description`, `vanancy_id`) VALUES ('','$Description','$vacancyID')";
											$results=mysqli_query($conn,$propertySQL);
											
											 
   if($results){
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

