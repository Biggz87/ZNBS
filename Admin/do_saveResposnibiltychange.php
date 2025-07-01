<?php 
include'../includes/Dbconnect.php';
$DetailID=$_POST['detailID'];

$Respoinsibilty=$_POST['Respoinsibilty'];
                        
 $propertySQL="UPDATE `vaca_responsibilites` SET `Responsibility`='$Respoinsibilty' WHERE `respons_id`='$DetailID'";
											$results=mysqli_query($conn,$propertySQL);
											
											 
   if($results){
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

