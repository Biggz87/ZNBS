<div class="row col-12 chairman-card" style="text-align='center'">
								<?php 
								include'../includes/Dbconnect2.php';
									$sql="SELECT * FROM `directors` WHERE `Role`='Chairman'";
									$stmt = $conn2->query($sql);

                             $count=0;
						while ($row5 = $stmt->fetch()) {
									$count++;	
								?>
								<div class="col-md-6">
								<div class="card m-1">
									<img class="card-img-top" src="images/staff/<?php echo $row5['picture']; ?>" >
									<h6 class="card-title text-center p-2"><?php echo $row5['Title']; ?> <?php echo $row5['Firstname']; ?> <?php echo $row5['LastName']; ?></h6>
									<h5 class="card-title text-center"><?php echo $row5['Role']; ?> </h5>
								</div><!-- end card-body-->
								</div>
													 
								<?php				} ?>
											
							</div>
							
							<div class="row">
								<?php 
									$sql="SELECT * FROM `directors` WHERE `Role`='Member'";
									$stmt = $conn2->query($sql);

                             $count=0;
						while ($row5 = $stmt->fetch()) {
									$count++;	
								?>
								<div class="card m-1">
									<img class="card-img-top" src="images/staff/<?php echo $row5['picture']; ?>" >
									<h6 class="card-title text-center p-2"><?php echo $row5['Title']; ?> <?php echo $row5['Firstname']; ?> <?php echo $row5['LastName']; ?></h6>
									<h5 class="card-title text-center"><?php echo $row5['Role']; ?> </h5>
								</div><!-- end card-body-->
								<?php
									 if($count==3 OR $count==6){
										 echo '</div> <div class="row">';
									 } ?>



								<?php				} ?>

							</div>