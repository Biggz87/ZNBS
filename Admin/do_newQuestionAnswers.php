<?php 


include'../includes/Dbconnect2.php';
$quest_id=$_POST['quest_id'];
$id=0;
$Answer=$_POST['QuestionAnswers'];            
$propertySQL="INSERT INTO `survey_quest_answer`(`answer_id`, `answer`, `question_id`) VALUES (:id,:Answer,:quest_id)";
$stmt = $conn->prepare($propertySQL);
$stmt->bindParam(":id",$id);
$stmt->bindParam(":Answer",$Answer);
$stmt->bindParam(":quest_id",$quest_id);

if ($stmt->execute()) {
echo 'success';
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

