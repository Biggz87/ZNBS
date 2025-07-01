<?php 
include'../includes/Dbconnect.php';
$vacancy_id=$_POST['vacancyid'];

$Respoinsibilty=$_POST['Respoinsibilty'];
                        
 $propertySQL="INSERT INTO `vaca_responsibilites`(`respons_id`, `Responsibility`, `vanancy_id`) VALUES ('','$Respoinsibilty','$vacancy_id')";
											$results=mysqli_query($conn,$propertySQL);
											
											 
   if($results){
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

