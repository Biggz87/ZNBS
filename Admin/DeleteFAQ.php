<?php
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/sessions.php';
$quest_id=$_GET['quest_id'];

	
	 $deleteQuery="DELETE FROM `q_and_a` WHERE `quest_no`=:quest_id";
	$stmt = $conn->prepare($SQL3);

$stmt->bindParam(":quest_id",$quest_id);


   if($stmt->execute()){
   
  echo "<script>window.location = 'QandA.php?del=y'</script>";
  !unlink($file_pointer);
    		
}else {


			
		echo "<script>window.location = 'QandA.php?del=N'</script>";
		
//}

	
	}
	

  
?>  