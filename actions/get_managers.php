 
						 <div class="row col-12 chairman-card" style="text-align='center'">
								<?php 
								include'../includes/Dbconnect2.php';
									 $sql="SELECT * FROM `employees_tbl` WHERE `Category`='Senior Management' AND `jobRole` LIKE'%Managing Director%' ";
									$stmt = $conn2->query($sql);

                             $count=0;
						while ($row5 = $stmt->fetch()) {
									$count++;	
								?>
								<div class="col-md-6">
								<div class="card m-1">
									<img class="card-img-top" src="images/staff/<?php echo $row5['Picture']; ?>" >
									<h6 class="card-title text-center"><?php echo $row5['Title']; ?> <?php echo $row5['first_name']; ?> <?php echo $row5['last_name']; ?></h6>
									<h5 class="card-title text-center"><?php echo $row5['jobRole']; ?> </h5>
								</div><!-- end card-body-->
								</div>
													 
								<?php				} ?>
											
							</div>
							<div class="row">
								<?php 
									
									$sql="SELECT * FROM `employees_tbl` WHERE `Category`='Senior Management' AND `jobRole` NOT LIKE'%Managing Director%' ";
									$stmt = $conn2->query($sql);

                             $count=0;
						while ($row5 = $stmt->fetch()) {
									$count++;	
								?>
								
								<div class="card m-1">
									<img class="card-img-top" src="images/staff/<?php echo $row5['Picture']; ?>" >
									<h6 class="card-title text-center"><?php echo $row5['first_name']; ?> <?php echo $row5['last_name']; ?></h6>
									<h5 class="card-title text-center"><?php echo $row5['jobRole']; ?> </h5>
								</div><!-- end card-body-->
								<?php
									 if($count==3 OR $count==6 Or $count==9 ){
										 echo '</div> <div class="row">';
									 }
								} ?>
							
							</div>
