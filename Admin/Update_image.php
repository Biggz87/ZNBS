<?php

function updateimage($data,$image_id){
	include '../includes/Dbconnect2.php';
 $query1="UPDATE `properties_imagess` SET `name`=:data WHERE `images_id`=:image_id";
 $stmt = $conn->prepare($query1);

$stmt->bindParam(":data",$data);
$stmt->bindParam(":image_id",$image_id);


   if($stmt->execute()){
		 
      return  "success";
			
		 
	 }else{
		 
		
     return  "An error Occured";
	 }
}
?>