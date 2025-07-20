<?php 
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/Dbconnect2.php';
$vacancy_id=$_POST['vacancyid'];

$Qualification=$_POST['Qualification'];
                        
 $propertySQL="INSERT INTO `vacancy_qualification`(`Qualif_id`, `qualification`, `Vacancy_id`) VALUES (:id,:Qualification,:vacancy_id)";
$stmt = $conn->prepare($propertySQL);
$stmt->bindParam(":id",'');
$stmt->bindParam(":Qualification",$Qualification);
$stmt->bindParam(":vacancy_id",$vacancy_id);


if ($stmt->execute()) {
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

