
<?php
define('jhshjgdhgdhgdhhj',TRUE);
include '../includes/Dbconnect2.php';
$categoryid=$_POST['category'];



  $sub_query ="SELECT `Sub_id`, `Sub_name`, `Category_id` FROM `sub_category` WHERE `Category_id`=:categoryid";	
              
                  			$stmt = $conn->prepare($sub_query);
							$stmt->bindParam(":categoryid",$categoryid);
							$stmt->execute();
							while($row5 = $stmt->fetch()){
 						   
						   $subid=$row5['Sub_id'];
						   $subname=$row5['Sub_name'];
						   
						?>
						<option value="<?php echo $subid; ?>"><?php echo $subname; ?></option>
                        <?php }

						
						?>
                </select>