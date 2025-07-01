<?php 

$survey_id=$_POST['surveyId'];



function QuestionNumber($survey_id){
	
	include'../includes/Dbconnect.php';
	 $propertySQL="SELECT * FROM `survey_questions` WHERE `sureveyid`='$survey_id'";
											$results=mysqli_query($conn,$propertySQL);
											
											return $number=mysqli_num_rows($results);
}

function Questionexitst($QuestNumb,$survey_id){
	
	include'../includes/Dbconnect.php';
	 $propertySQL="SELECT * FROM `survey_questions` WHERE `sureveyid`='$survey_id' AND `question_no`='$QuestNumb'";
											$results=mysqli_query($conn,$propertySQL);
											
											return $number=mysqli_num_rows($results);
}




include'../includes/Dbconnect.php';

 
if(QuestionNumber($survey_id)<3){
	
	$questnumber=1;
	if(Questionexitst($questnumber,$survey_id)==1){
		$questnumber=2;
	}
	if(Questionexitst($questnumber,$survey_id)==1){
		$questnumber=3;
		
	}
		

		
		

$Question=$_POST['Question'];            
  $propertySQL="INSERT INTO `survey_questions`(`questionid`, `question`, `sureveyid`, `question_no`) VALUES ('','$Question','$survey_id','$questnumber')";
											$results=mysqli_query($conn,$propertySQL);
											
											 
   if($results){
   echo 'success';
 ;
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
}else{
	
	echo 'The number of questions cant be more than three(3)';
}






	
	
	
            ?>

