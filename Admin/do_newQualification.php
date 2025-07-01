<?php 
include'../includes/Dbconnect.php';
$vacancy_id=$_POST['vacancyid'];

$Qualification=$_POST['Qualification'];
                        
 $propertySQL="INSERT INTO `vacancy_qualification`(`Qualif_id`, `qualification`, `Vacancy_id`) VALUES ('','$Qualification','$vacancy_id')";
											$results=mysqli_query($conn,$propertySQL);
											
											 
   if($results){
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

