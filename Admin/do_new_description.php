<?php 
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/Dbconnect2.php';
$vacancyID=$_POST['vacancyid'];

$Description=$_POST['Description'];
                        
 $propertySQL="INSERT INTO `vanancy_descitipn`(`vac_descript_id`, `Description`, `vanancy_id`) VALUES (:id,:Description,:vacancyID)";
$stmt = $conn->prepare($propertySQL);
$stmt->bindParam(":id",'');
$stmt->bindParam(":Description",$Description);
$stmt->bindParam(":vacancyID",$vacancyID);

if ($stmt->execute()) {
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

