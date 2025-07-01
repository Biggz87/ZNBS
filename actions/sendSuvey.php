<?php 
include'../includes/Dbconnect.php';
include 'checkifemailexist.php';
$FirstName=$_POST['Firstname'];
$Question1=$_POST['Question1'];
$Question2=$_POST['Question2'];
$Question3=$_POST['Question3'];
$survey_id=$_POST['survey_id'];
$LastName=$_POST['Lastname'];
$Email=$_POST['Email'];
$id='';

$datetoday=date('Y-m-d');


$exits=ifitexits($Email,$survey_id);

if($exits==2){
	
	echo 'You have already submitted a survey. Thank you!';
}else {
	
	
	 $stmt = $conn->prepare("INSERT INTO `survey_response`(`r_id`, `FirstName`, `LastName`, `Email`, `question1`, `question2`, `question3`, `Date_sumitted`,`survey_id`) 
	 VALUES(?,?,?,?,?,?,?,?,?)");
//$query="INSERT INTO `survey_response`(`r_id`, `FirstName`, `LastName`, `Email`, `question1`, `question2`, `question3`, `Date_sumitted`,`survey_id`)VALUES ('','$FirstName','$LastName','$Email','$Question1','$Question2','$Question3','$datetoday','$survey_id')";
$stmt->bind_param("sssssssdi",$id,$FirstName,$LastName,$Email,$Question1,$Question2,$Question3,$datetoday,$survey_id); 

if ($stmt->execute()) { 
   echo 'success';
} else {
   echo 'The survey was not submitted due to an error please try again later';
}

}

						?>