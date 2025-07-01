<?php 
include'../includes/Dbconnect.php';
$quest_id=$_POST['quest_id'];

$Answer=$_POST['QuestionAnswers'];            
 $propertySQL="INSERT INTO `survey_quest_answer`(`answer_id`, `answer`, `question_id`) VALUES ('','$Answer','$quest_id')";
											$results=mysqli_query($conn,$propertySQL);
											
											 
   if($results){
   echo 'success';

    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

