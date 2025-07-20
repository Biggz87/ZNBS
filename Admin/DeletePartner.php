<?php
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/sessions.php';
$partnerID=$_GET['partner_id'];

	
	 $deleteQuery="DELETE FROM `partners` WHERE `Partner_id`=:partnerID";
	 $stmt->bindParam(":partnerID",$partnerID);
	 $stmt = $conn->prepare($deleteQuery);
	 $stmt->execute();
	 $count = $stmt->rowCount();
   if($count > 0){
   
  echo "<script>window.location = 'partners.php?del=y'</script>";
  !unlink($file_pointer);
    		
}else {


			
		echo "<script>window.location = 'Partners.php?del=N'</script>";
		
//}

	
	}
	

  
?>  