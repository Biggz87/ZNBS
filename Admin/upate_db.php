
<?php
define('jhshjgdhgdhgdhhj',TRUE);

function updatedb($data,$prop_id,$thumb){
/*	echo $data;
	echo $thumb;
	echo $prop_id;
*/
	
	include '../includes/Dbconnect2.php';
	$id=0;
	$path='';
 $query1="INSERT INTO `properties_imagess`(`images_id`, `name`, `path`, `prop_id`, `thumb`) VALUES (:id,:data,:path,:prop_id,:thumb)";

 $stmt = $conn->prepare($query1);
$stmt->bindParam(":id",$id);
$stmt->bindParam(":data",$data);
$stmt->bindParam(":prop_id",$prop_id);
$stmt->bindParam(":thumb",$thumb);
$stmt->bindParam(":path",$path);


   if($stmt->execute()){
		 
       return  "success";
			
		 
	 }else{
		return  "An error Occured";
		
     
	 }
}
?>