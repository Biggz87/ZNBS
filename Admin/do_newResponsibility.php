<?php 
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/Dbconnect2.php';
$vacancy_id=$_POST['vacancyid'];

$Respoinsibilty=$_POST['Respoinsibilty'];
                        
 $propertySQL="INSERT INTO `vaca_responsibilites`(`respons_id`, `Responsibility`, `vanancy_id`) VALUES (:id,:Respoinsibilty,:vacancy_id)";
$stmt = $conn->prepare($propertySQL);
$stmt->bindParam(":id",'');
$stmt->bindParam(":Respoinsibilty",$Respoinsibilty);
$stmt->bindParam(":vacancy_id",$vacancy_id);

if ($stmt->execute()) {
   echo 'success';
 
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

