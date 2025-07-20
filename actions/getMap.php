<?php 
if(!defined('jhshjgdhgdhgdhhj')){

define('jhshjgdhgdhgdhhj',TRUE);

include'../includes/Dbconnect2.php';

$Branch=$_POST['branchId'];
	
				$sql="SELECT `branch_id`, `branch_name`, `Address1`, `Address 2`, `Town`, `Contact_no1`, `Contact_no2`, `email`, `google_map` FROM `branch_tbl` WHERE `branch_id`='$Branch'";
				$stmt = $conn2->query($sql);
				
				
				         
                    while ($row = $stmt->fetch()) {
						
						echo $value= $row['google_map'];
						
						 
					}
}
					?>