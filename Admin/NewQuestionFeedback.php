<?php 
include'../includes/Dbconnect2.php';
$DetailID=$_POST['detailID'];

$Question=$_POST['Question'];
                        
 $propertySQL="UPDATE `survey_questions` SET `question`=:Question WHERE `questionid`=:DetailID";
											 $stmt = $conn->prepare($SQL3);

$stmt->bindParam(":Question",$Question);
$stmt->bindParam(":DetailID",$DetailID);



   if($stmt->execute()){{
   echo 'success';
 
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

