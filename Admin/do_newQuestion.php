<?php 


define('jhshjgdhgdhgdhhj',TRUE);

$survey_id=$_POST['surveyId'];


 

function QuestionNumber($survey_id){
	
	include'../includes/Dbconnect2.php';
	 $propertySQL="SELECT COUNT(*) FROM `survey_questions` WHERE `sureveyid`=:survey_id";
											 $stmt = $conn->prepare($propertySQL);
                                    $stmt->bindParam(":survey_id",$survey_id);
											$stmt->execute();
		
		return $count = $stmt->fetchColumn();
}



function Questionexitst($QuestNumb,$survey_id){
	
	include'../includes/Dbconnect2.php';
	 $propertySQL="SELECT COUNT(*)  FROM `survey_questions` WHERE `sureveyid`='$survey_id' AND `question_no`='$QuestNumb'";
											 $stmt = $conn->prepare($propertySQL);
                                    $stmt->bindParam(":survey_id",$survey_id);
											$stmt->execute();
											return $count = $stmt->fetchColumn();
									
}




include'../includes/Dbconnect2.php';

 
if(QuestionNumber($survey_id)<3){
	
	$questnumber=1;
	if(Questionexitst($questnumber,$survey_id)==1){
		$questnumber=2;
	}
	if(Questionexitst($questnumber,$survey_id)==1){
		$questnumber=3;
		
	}
		
$id=0;
		
		

$Question=$_POST['Question'];            
  $propertySQL="INSERT INTO `survey_questions`(`questionid`, `question`, `sureveyid`, `question_no`) VALUES (:id,:Question,:survey_id,:questnumber)";
  $stmt = $conn->prepare($propertySQL);
$stmt->bindParam(":id",$id);
$stmt->bindParam(":Question",$Question);
$stmt->bindParam(":survey_id",$survey_id);
$stmt->bindParam(":questnumber",$questnumber);



if ($stmt->execute()) {
   echo 'success';
 
    		
}else {


			
			echo 'not successful';
		
//}

	
	}
}else{
	
	echo 'The number of questions cant be more than three(3)';
}






	
	
	
            ?>

