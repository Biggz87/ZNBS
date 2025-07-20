<?php 
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/Dbconnect2.php';
$DetailID=$_POST['detailID'];

$Qualification=$_POST['Qualification'];
                        
 $propertySQL="UPDATE `vacancy_qualification` SET `qualification`='$Qualification' WHERE `Qualif_id`=:DetailID";
$stmt = $conn->prepare($propertySQL);
$stmt->bindParam(":DetailID",$DetailID);
if ($stmt->execute()) {
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

