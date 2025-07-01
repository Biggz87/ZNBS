<?php include'../includes/Dbconnect.php';
$Branch=$_POST['branchId'];

				$sql="SELECT `branch_id`, `branch_name`, `Address1`, `Address 2`, `Town`, `Contact_no1`, `Contact_no2`, `email`, `google_map` FROM `branch_tbl` WHERE `branch_id`='$Branch'";
				$product = mysqli_query($conn,$sql);
				
				         
                    while ($row = mysqli_fetch_array($product)) {
						
						echo $row['google_map'];
						 
					}
					?>