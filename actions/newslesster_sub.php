<?php
include'includes/Dbconnect.php';
$email_address=$_POST['email'];
include 'checkifemailexist.php';
$exits=ifitexits($email_address);

if($exits==2){
	
	echo 2;
}else {
	
$query="INSERT INTO `newsletter_email`(`id`, `email`) VALUES ('','$email_address')";
      
$result=mysqli_query($conn,$query);
if(mysqli_affected_rows($conn) == 1){
   echo 1;
   
}else{
   echo 0;
}
}






?>