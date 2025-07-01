<?php 
include'../includes/Dbconnect.php';
$Number_repayments=$_POST['Period'];
$type=$_POST['product_name'];

				$prod_sql="SELECT `loan_id`, `loan_name`, `interest`, `maximum_tanure`, `minum_tanure` FROM `loan_types`  WHERE `loan_name`='$type'";
				$product = mysqli_query($conn,$prod_sql);
				
				          $maxperiod=0;
						  $minperiod=0;
                    while ($row = mysqli_fetch_array($product)) {
						
						$maxperiod=$row['maximum_tanure'];
						 $minperiod=$row['minum_tanure'];
					}
						
						 
						if(($Number_repayments > $maxperiod)  OR  ($Number_repayments < $minperiod )){
							echo 'Enter a period Not less than '.$minperiod.' Month(s) But Not More than '. $maxperiod.' Months' ;
							
						}else{
							echo 'success';
						}
						
						?>