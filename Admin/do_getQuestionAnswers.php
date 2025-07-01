<?php 
include'../includes/Dbconnect.php';
$DetailID=$_POST['detailID'];
                        
 $propertySQL="SELECT `answer_id`, `answer`, `question_id` FROM `survey_quest_answer` WHERE `answer_id`='$DetailID'";
											$results=mysqli_query($conn,$propertySQL);
											
											while($row5=mysqli_fetch_array($results)){
												echo $row5['answer'];
												
											}
											 
            ?>

