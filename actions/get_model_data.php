<?php 

include'../includes/Dbconnect2.php';

					
																	$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
																	`At_status` FROM `articles` WHERE `At_sub_cat`='22' OR `At_sub_cat`='24'";
																	$stmt = $conn2->query($sql);
			
																   
																	while ($row5= $stmt->fetch()) {
																		
																	$title=$row5['At_Title'];
																	 $content=$row5['At_content'];
																
																?>	
		<!--pop-up-window-->
		<div class="modal fade" id="Banking<?php echo $row5['article_id'];?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php echo $title; ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php if($row5['At_image']){?><img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'><?php } ?>
						<p class="text-justify"> <?php echo $content; ?> <br></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
																<?php } ?>
																
																<?php 



					
																	$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
																	`At_status` FROM `articles` WHERE `At_sub_cat`='17'";
																	$stmt = $conn2->query($sql);
			
																   
																	while ($row5= $stmt->fetch()) {
																		
																	$title=$row5['At_Title'];
																	 $content=$row5['At_content'];
																
																?>	
		<!--pop-up-window-->
		<div class="modal fade" id="news<?php echo $row5['article_id'];?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php echo $title; ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php if($row5['At_image']){?><img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'><?php } ?>
						<p class="text-justify"> <?php echo $content; ?> <br></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
																<?php } ?>
																
																
																
																
																<?php 

					
																$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
																`At_status` FROM `articles` WHERE `At_sub_cat`='24'";
																$stmt = $conn2->query($sql);
        
                                                               
																while ($row5 = $stmt->fetch()) {
																	
																$title=$row5['At_Title'];
																 $content=$row5['At_content'];
																
																?>	
		<!--pop-up-window-->
		<div class="modal fade" id="mortgage<?php echo $row5['article_id'];?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php echo $title; ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
						<?php if($row5['At_image']){ ?>	<img src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
						<p>
						<?php echo $content; ?>
						<?php if($row5['Document']){ ?>	<a href="Uploads/Document/<?php echo $row5['Document']; ?>"><?php echo $row5['Document'] ?></a><?php } ?>
							</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
																<?php } ?>
																
																
	<?php 

					
																$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
																`At_status` FROM `articles` WHERE `At_sub_cat`='21'";
																$stmt = $conn2->query($sql);
        
                                                               
																while ($row5 = $stmt->fetch()) {
																	
																$title=$row5['At_Title'];
																 $content=$row5['At_content'];
																
																?>	
		<!--pop-up-window-->
		<div class="modal fade" id="types<?php echo $row5['article_id'];?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php echo $title; ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
					<?php if($row5['At_image']){ ?>	<img src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
						<p>
						<?php echo $content; ?>
						<?php if($row5['Document']){ ?>	<a href="Uploads/Document/<?php echo $row5['Document']; ?>"><?php echo $row5['Document'] ?></a><?php } ?>
							</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
																<?php } ?>															
															
															
		<?php 
					                                          
																$sql="SELECT * FROM `articles` WHERE `At_sub_cat`='27' OR `At_sub_cat`='26'";
																$stmt = $conn2->query($sql);
        
                                                               
																while ($row5 = $stmt->fetch()) {
																	
																$title=$row5['At_Title'];
																 $content=$row5['At_content'];
																
																?>	
		<!--pop-up-window-->
		<div class="modal fade" id="tenders<?php echo $row5['article_id'];?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php echo $title; ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
						
						<?php if($row5['At_image']){ ?>	<img src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
						<p>
						<?php echo $content; ?>
						<?php if($row5['Document']){ ?>	<a href="Uploads/Document/<?php echo $row5['Document']; ?>"><?php echo $row5['Document'] ?></a><?php } ?>
							</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
		
		
																<?php } ?>
																
																
																<?php 
					
																$sql="SELECT * FROM `articles` WHERE `At_sub_cat`='22'";
																$stmt = $conn2->query($sql);
        
                                                               
																while ($row5 = $stmt->fetch()) {
																	
																$title=$row5['At_Title'];
																 $content=$row5['At_content'];
																
																?>	
		<!--pop-up-window-->
		<div class="modal fade" id="digital<?php echo $row5['article_id'];?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php echo $title; ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
						<?php if($row5['At_image']){?><img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'><?php } ?>
						<?php echo $content; ?>
						<br></p><?php if($row5['Document']){
							?> <a   class="button" target="_blank" style="animation-delay: 3s" href="Uploads/Document/<?php echo $row5['Document'] ?>">Download</a> <?php }?> 
							
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
		
		
																<?php } ?>
																
																
				<?php 
						
					
																 $sql="SELECT * FROM `articles` WHERE `At_sub_cat`='29'";
																$stmt = $conn2->query($sql);
        
                                                               
																while ($row5 = $stmt->fetch()) {
																	
																$title=$row5['At_Title'];
																 $content=$row5['At_content'];
																
																?>												
			<div class="modal fade" id="jobs<?php echo $row5['article_id'];?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php echo $title; ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
						
						<?php if($row5['At_image']){ ?>	<img src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
						<p>
						<?php echo $content; ?>
						<?php if($row5['Document']){ ?>	<a href="Uploads/Document/<?php echo $row5['Document']; ?>"><?php echo $row5['Document'] ?></a><?php } ?>
							</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
																<?php } ?>
																
																 													
																 
		  <?php 
					
					
																$sql="SELECT `branch_id`, `branch_name`, `Address1`, `Address 2`, `Town`, `Contact_no1`, `Contact_no2`, `email`, `google_map` FROM `branch_tbl` WHERE `branch_name`!='Main Branch'";
																$stmt = $conn2->query($sql);
        
                                                               
																while ($row5 = $stmt->fetch()) {
																	
																$title=$row5['branch_name'];
																
																 ?>											
			<div class="modal fade" id="branch<?php echo $row5['branch_id'];?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php echo $title; ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
						
						<div class="col-lg-12">
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h2><img style="height:30px; width:30px;" src="images/location-icon.png"></h2>
                                <p><?php echo $row5['Address1']; ?>, <?php echo $row5['Address 2']; ?></p>
								<p><?php echo $row5['Town']; ?>, Zambia</p>
                            </div>
            
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h2><img style="height:30px; width:30px;" src="images/mail-icon.png"></h2>
                                <p id="branch_<?php echo $row5['branch_id']; ?> "><?php echo $row5['email']; ?></p>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h2><img style="height:30px; width:30px;" src="images/handset-icon.png"></h2>
                                <p><?php echo $row5['Contact_no1']; ?> <?php if($row5['Contact_no2'])?> / <?php echo $row5['Contact_no2']; ?></p>
                            </div>   
                        
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            
                               
																					<a href="https://tweeter.com"><img style="height:30px; width:30px;" src="images/whatsapp-256.png"></a>
                                                    <a href="https://web.facebook.com/"><img style="height:30px; width:30px;" src="images/facebook_circle-512.png"></a>
													<a href="https://tweeter.com"><img style="height:30px; width:30px;" src="images/Twitter.png"></a>
                                <p></p>
								<div id="mobile<?php echo $row5['branch_id']; ?>"> </div>
                            </div>
                        </div>
                    </div>
							
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
																<?php } ?>
																
																
																
		
				<!--Running Tenders-->
		<div class="modal fade" id="runningtenders" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1>Running Tenders</h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<?php 
						
					
																 $sql="SELECT * FROM `articles` WHERE `At_sub_cat`='27'";
																$stmt = $conn2->query($sql);
        
                                                               
																while ($row5 = $stmt->fetch()) {
																	
																$title=$row5['At_Title'];
																 $content=$row5['At_content'];
																
																?>
															<?php if($row5['At_image']){ ?>	<img src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
						<p>
						<?php echo $content; ?>
						<?php if($row5['Document']){ ?>	<a href="Uploads/Document/<?php echo $row5['Document']; ?>"><?php echo $row5['Document'] ?></a><?php } ?>
							</p>
																<?php } ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
		
			<!--Tender Award Notices-->
		<div class="modal fade" id="awardNotices" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1>Tender Award Notices</h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php 
						
					
																 $sql="SELECT * FROM `articles` WHERE `At_sub_cat`='26'";
																$stmt = $conn2->query($sql);
        
                                                               
																while ($row5 = $stmt->fetch()) {
																	
																$title=$row5['At_Title'];
																 $content=$row5['At_content'];
																
																?>
															<?php if($row5['At_image']){ ?>	<img src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
						<p>
						<?php echo $content; ?>
						<?php if($row5['Document']){ ?>	<a href="Uploads/Document/<?php echo $row5['Document']; ?>"><?php echo $row5['Document'] ?></a><?php } ?>
							</p>
																<?php } ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
		
		
		
		<div class="modal fade" id="downloads" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1>Downloads</h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
						
							<?php   
							 		$downloadSQL="SELECT `Categoty_id`, `name` FROM `downlaod_categories`";
									$stmt = $conn2->query($downloadSQL);
											$stmt->execute();
									while($row5 = $stmt->fetch()){
									$count++; 
								?>
														
								<div id="accordion">
									<div class="row">
									  <div class="card col-12 p-0" data-toggle="collapse" data-target="#collapseDownloads<?php echo $count; ?>" aria-expanded="true" aria-controls="collapseOne">
										<div class="card-header p-1" id="collapseDownload">
										  <h5>
											<button class="btn btn-link text-white">
											  <?php  echo $row5['name']; ?>
											</button>
										  </h5>
										</div>

										<div id="collapseDownloads<?php echo $count; ?>" class="collapse <?php if($count==1){?>show<?php } ?>" aria-labelledby="collapseDownload" data-parent="#accordion">
										  <div class="card-body">
											<?php getDownloadItems($row5['Categoty_id']); ?>
										  </div>
										</div>
									  </div>

									</div>
								</div><!--end accordion-->
														
							<?php } ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
		
													

															
			<!--Procurement plan-->
		<div class="modal fade" id="proc_plan" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1>Procurement plan</h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php 
						
					
																 $sql="SELECT * FROM `articles` WHERE `At_sub_cat`='28'";
																$stmt = $conn2->query($sql);
        
                                                               
																while ($row5 = $stmt->fetch()) {
																	
																$title=$row5['At_Title'];
																 $content=$row5['At_content'];
																
																?>
															<?php if($row5['At_image']){ ?>	<img src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
						<p>
						<?php echo $content; ?>
						<?php if($row5['Document']){ ?>	<a href="Uploads/Document/<?php echo $row5['Document']; ?>"><?php echo $row5['Document'] ?></a><?php } ?>
							</p>
																<?php } ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
		
			<?php 
						
					
																 	$sql="SELECT  `emp_id`, `Title`, `first_name`, `last_name`, `date_of_birth`, `email`, `mobile_number`, `whatsapp`, `address1`, `address2`, `city_town`, `genda`, 
																 	`country`, `date_joined`, `jobRole`, `Qualification_level`, `qualification_Area`, `Category`, `Picture`, `brief_profile` FROM `employees_tbl FROM `employees_tbl` WHERE `Category`='Senior Management' AND `jobRole` NOT LIKE'%Managing Director%' ";
																$stmt = $conn2->query($sql);
        
                                                               
																while ($row5 = $stmt->fetch()) {
																	
																
																 $content=$row5['brief_profile'];
																
																?>
		<!--Staff Profile --->
			<div class="modal fade" id="staff_<?php echo $row5['emp_id'] ?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php $row5['At_Title'] ?> <?php $row5['first_name'] ?> <?php $row5['last_name'] ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					
															<?php if($row5['Picture']){ ?>	<img src="Admin/images/<?php echo $row5['Picture']; ?>"><?php } ?>
						<p>
						<?php echo $content; ?>
						
							</p>
																
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
		<?php } ?>