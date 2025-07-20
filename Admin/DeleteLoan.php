<?php
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}
include'../includes/sessions.php';
$lid=$_GET['lid'];

	
	 $deleteQuery="DELETE FROM `loan_types` WHERE `loan_id`=:lid";
	 $stmt->bindParam(":lid",$lid);
	 $stmt = $conn->prepare($deleteQuery);
	 $stmt->execute();
	 $count = $stmt->rowCount();
   if($count > 0){
   
  echo "<script>window.location = 'ArticleListLoans.php?del=Y'</script>";
 
    		
}else {


			
		echo "<script>window.location = 'ArticleListLoans.php?del=N'</script>";
		
//}

	
	}
	

  
?>  