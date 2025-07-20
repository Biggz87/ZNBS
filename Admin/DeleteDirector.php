<?php
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/sessions.php';
$direct_id=$_GET['$direct_id'];

	
	 $deleteQuery="DELETE FROM `directors` WHERE `Identity`=:direct_id";
	$stmt->bindParam(":direct_id",$direct_id);
	 $stmt = $conn->prepare($deleteQuery);
	 $stmt->execute();
	 $count = $stmt->rowCount();
   if($count > 0){
   
  echo "<script>window.location = 'Directors.php?del=Y'</script>";
 
    		
}else {


			
		echo "<script>window.location = 'Directors.php?del=N'</script>";
		
//}

	
	}
	

  
?>  