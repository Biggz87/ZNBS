<?php
include'../includes/sessions.php';
$direct_id=$_GET['$direct_id'];

	
	 $deleteQuery="DELETE FROM `directors` WHERE `Identity`='$direct_id'";
	 $result3= mysqli_query($conn,$deleteQuery);
   if($result3){
   
  echo "<script>window.location = 'Directors.php?del=Y'</script>";
 
    		
}else {


			
		echo "<script>window.location = 'Directors.php?del=N'</script>";
		
//}

	
	}
	

  
?>  