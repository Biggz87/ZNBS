<?php 
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/Dbconnect2.php';
$DetailID=$_POST['detailID'];
                        
 $propertySQL="SELECT `Qualif_id`, `qualification`, `Vacancy_id` FROM `vacancy_qualification` WHERE `Qualif_id`=:DetailID";
											 $stmt->bindParam(":DetailID",$DetailID);
											$stmt = $conn->prepare($propertySQL);
											$stmt->execute();
											while($row5 = $stmt->fetch()){
												echo $row5['qualification'];
												
											}
											 
            ?>

