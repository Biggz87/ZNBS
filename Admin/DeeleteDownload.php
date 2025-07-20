<?php
defined('jhshjgdhgdhgdhhj',true);
include'../includes/sessions.php';
$DownloadID=$_GET['DownloadID'];
      $deleteQuery="DELETE FROM `downloads` WHERE `document_id`=:DownloadID";
	 $stmt = $conn->prepare($deleteQuery);
	
	 $stmt->bindParam(":DownloadID",$DownloadID);
	 
	 $stmt->execute();
	 $count = $stmt->rowCount();
   if($count > 0){
   
  echo "<script>window.location = 'Downloads.php?del=y'</script>";
  !unlink($file_pointer);
    		
}else {


 //print_r($stmt->errorInfo());
			
		echo "<script>window.location = 'Downloads.php?del=N'</script>";
		
//}

	
	}
	

  
?>  