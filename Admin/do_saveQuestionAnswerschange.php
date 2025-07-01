<?php 
include'../includes/Dbconnect.php';
$DetailID=$_POST['detailID'];

$QuestionAnswers=$_POST['QuestionAnswers'];
                        
 $propertySQL="UPDATE `survey_quest_answer` SET `answer`='$QuestionAnswers'  WHERE `answer_id`='$DetailID'";
											$results=mysqli_query($conn,$propertySQL);
											
											 
   if($results){
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
            ?>

