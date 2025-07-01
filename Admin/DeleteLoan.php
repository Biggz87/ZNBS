<?php
include'../includes/sessions.php';
$lid=$_GET['lid'];

	
	 $deleteQuery="DELETE FROM `loan_types` WHERE `loan_id`='$lid'";
	 $result3= mysqli_query($conn,$deleteQuery);
   if($result3){
   
  echo "<script>window.location = 'ArticleListLoans.php?del=Y'</script>";
 
    		
}else {


			
		echo "<script>window.location = 'ArticleListLoans.php?del=N'</script>";
		
//}

	
	}
	

  
?>  