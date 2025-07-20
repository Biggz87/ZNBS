	 <?php   	 
	include'../includes/Dbconnect2.php';
	 $branch_id=$_POST['branch_id'];
	
							$sql="SELECT `branch_id`, `branch_name`, `Address1`, `Address 2`, `Town`, `Contact_no1`, `Contact_no2`, `email`, `google_map` FROM `branch_tbl` WHERE `branch_id`=:branch_id";
							
								$stmt = $conn2->prepare($sql);
								
								 $stmt->bindParam("branch_id",$branch_id);
							
											$stmt->execute();
										
											
											while( $row5 = $stmt->fetch()){

						 $title=$row5['branch_name'];
						?>

						

							<h2 class="text-center"><?php echo $title; ?></h1>
							<p class="text-justify"> <?php  ?> <br></p> 
							<div class="col-lg-12">

								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<h2><img style="height:30px; width:30px;" src="images/location-icon.png"></h2>
										<p><?php echo $row5['Address1']; ?>, <?php echo $row5['Address 2']; ?></p>
										<p><?php echo $row5['Town']; ?>, Zambia</p>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-6">
										<h2><img style="height:30px; width:30px;" src="images/mail-icon.png"></h2>
										<p id="branch_<?php echo $row5['branch_id']; ?> "><?php echo $row5['email']; ?></p>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-6">
										<h2><img style="height:30px; width:30px;" src="images/handset-icon.png"></h2>
										<p><?php echo $row5['Contact_no1']; ?> <?php if($row5['Contact_no2'])?> / <?php echo $row5['Contact_no2']; ?></p>
									</div>   

									<div class="col-lg-4 col-md-4 col-sm-6">

										<a href="https://tweeter.com">
											<img style="height:30px; width:30px;" src="images/whatsapp-256.png">
										</a>
										<a href="https://web.facebook.com/">
											<img style="height:30px; width:30px;" src="images/facebook_circle-512.png">
										</a>
										<a href="https://tweeter.com">
											<img style="height:30px; width:30px;" src="images/Twitter.png">
										</a>
										<p></p>

									</div>
								</div>

								<div class="row" id="<?php echo $row5['branch_id']; ?>">
                                 <?php echo $row5['google_map']; ?>
								</div>
							</div>
						


						<?php  

																	} ?>