<?php 
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/Dbconnect2.php';
$DetailID=$_POST['detailID'];

$Respoinsibilty=$_POST['Respoinsibilty'];
                        
 $propertySQL="UPDATE `vaca_responsibilites` SET `Responsibility`=:Respoinsibilty WHERE `respons_id`=:DetailID";
$stmt = $conn->prepare($propertySQL);
$stmt->bindParam(":Respoinsibilty",$Respoinsibilty);
$stmt->bindParam(":DetailID",$DetailID);

if ($stmt->execute()) {
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

