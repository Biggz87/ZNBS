<?php 
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/Dbconnect2.php';
$DetailID=$_POST['detailID'];
                        
 $propertySQL="SELECT `respons_id`, `Responsibility`, `vanancy_id` FROM `vaca_responsibilites` WHERE `respons_id`=DetailID";
											 $stmt->bindParam(":DetailID",$DetailID);
											$stmt = $conn->prepare($propertySQL);
											$stmt->execute();
											while($row5 = $stmt->fetch()){
												echo $row5['Responsibility'];
												
											}
											 
            ?>

