<?php

include'../includes/sessions.php';
$AticleID=$_GET['decriptid'];


	 $deleteQuery="DELETE FROM `articles` WHERE `article_id`=:AticleID";
	  $stmt = $conn2->prepare($deleteQuery);
	$stmt->bindParam("AticleID",$AticleID);
	
	 $stmt->execute();
	 $count = $stmt->rowCount();
   if($count > 0){
   
  echo "<script>window.location = 'ArticleList.php?del=Y'</script>";
 
    		
}else {


			
		echo "<script>window.location = 'ArticleList.php?del=N'</script>";
		
//}

	
	}
	

  
?>  