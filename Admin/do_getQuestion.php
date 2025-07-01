<?php 


function newQuestion(){
include'../includes/Dbconnect.php';
$DetailID=$_POST['detailID'];


                        
 $propertySQL="SELECT `questionid`, `question`, `sureveyid` FROM `survey_questions` WHERE `questionid`='$DetailID'";
											$results=mysqli_query($conn,$propertySQL);
											
											while($row5=mysqli_fetch_array($results)){
												echo $row5['question'];
												
											}
											 
            ?>

