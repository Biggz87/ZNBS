<?php function getEmpID(){
	
	include '../includes/Dbconnect.php';

 $sql = "SHOW TABLE STATUS LIKE 'property'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();

return  $row['Auto_increment'];
}


?>