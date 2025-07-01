<?php 
include'../includes/Dbconnect.php';
$DetailID=$_POST['detailID'];

$Qualification=$_POST['Qualification'];
                        
 $propertySQL="UPDATE `vacancy_qualification` SET `qualification`='$Qualification' WHERE `Qualif_id`='$DetailID'";
											$results=mysqli_query($conn,$propertySQL);
											
											 
   if($results){
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

