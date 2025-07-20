<?php 

define('jhshjgdhgdhgdhhj',true);
if(!defined('jhshjgdhgdhgdhhj')){
	echo '<script>window.location = "http://www.znbs.co.zm";</script>';
}

include'../includes/Dbconnect2.php';
$Number_repayments=$_POST['Period'];

$type=$_POST['product_name'];


				$prod_sql="";
				
				$stmt = $conn->prepare("SELECT `loan_id`, `loan_name`, `interest`, `maximum_tanure`, `minum_tanure` FROM `loan_types`  WHERE `loan_name`=:type");
	
				$stmt->bindParam(":type",$type);
				$stmt->execute();
				
				          $maxperiod=0;
						  $minperiod=0;
                    while ($row = $stmt->fetch()) {
						
						$maxperiod=$row['maximum_tanure'];
						 $minperiod=$row['minum_tanure'];
					}
						
						 
						if(($Number_repayments > $maxperiod)  OR  ($Number_repayments < $minperiod )){
							echo 'Enter a period Not less than '.$minperiod.' Month(s) But Not More than '. $maxperiod.' Months' ;
							
						}else{
							echo 'success';
						}
						
						?>