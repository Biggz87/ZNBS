<?php 
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/Dbconnect2.php';
$DetailID=$_POST['detailID'];

$Description=$_POST['Description'];
                        
 $propertySQL="UPDATE `vanancy_descitipn` SET `Description`='$Description' WHERE `vac_descript_id`=:DetailID";
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

