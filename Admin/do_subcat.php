
<?php
include '../includes/Dbconnect.php';
$categoryid=$_POST['category'];



  $sub_query = mysqli_query($conn,"SELECT `Sub_id`, `Sub_name`, `Category_id` FROM `sub_category` WHERE `Category_id`='$categoryid'");	
              
                    while ($row = mysqli_fetch_array($sub_query)) {
                        $subid = $row['Sub_id'];
                        $subname= $row['Sub_name'];
 						
						?>
						<option value="<?php echo $subid; ?>"><?php echo $subname; ?></option>
                        <?php }

						
						?>
                </select>