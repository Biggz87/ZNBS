			<div class="row">
				<div class="col-lg-3 section-img"></div>

				<div class="col-lg-6 col-md-8 section-content">
					
					<div class="content-panel tab-1-about animated fadeIn">
					   
						<h1 class="display-4 text-center">Welcome</h1>
						<hr>
						<div class="col-12">
							<div class="card-deck">
								<div class="row">
									<div class="card card-banking-link" data-list="tab-8-account-201">
										<a href="#banking" data-toggle="collapse" data-target="#collapseTypesofAccounts">
											<div class="card-img-top"><img class="card-img-top" src="images/open-acc.jpg"></div>
											<h2 class="card-title text-center">Open an Account</h2>
											<p class="card-text p-3  text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										</a>
									</div><!-- end card-body-->

									<div class="card card-banking-link" data-list="tab-6-Mortgage205">
										<a href="#banking" data-toggle="collapse" data-target="#collapseMortgages">
											<div class="card-img-top"><img class="card-img-top" src="images/apply-mortgage.jpg"></div>
											<h2 class="card-title text-center">Apply for Mortgage</h2>
											<p class="card-text p-2 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										</a>
									</div><!-- end card-body-->
								</div>
								
								<div class="m-2 mobile-hide"></div>
								
								<div class="row">
									<div class="card card-banking-link" data-list="tab-6-digital204"  data-toggle="collapse" data-target="#collapseMobileBanking">
										<a href="#banking">
											<div class="card-img-top"><img class="card-img-top" src="images/dig-banking.jpg"></div>
											<h2 class="card-title text-center">Digital Banking</h2>
											<p class="card-text p-2 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										</a>
									</div><!-- end card-body-->
									
									<div class="card card-property-link" data-list="tab-for-sale">
										<a href="#property">
											<div class="card-img-top"><img src="images/property (2).jpg"></div>
											<h2 class="card-title text-center">Aquire Property</h2>
											<p class="card-text p-2 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										</a>
									</div><!-- end card-body-->	
								</div>
							</div><!--end card deck-->
							
						</div>
					</div>
					<div class="content-panel tab-1 animated fadeIn">
					   
						<h1 class="display-4 text-center">Our Drive and Passion</h1>
						<hr>
						<div class="card-deck">
							<div class="row">
								<div class="card card-icon">
									<div class="card-icon-img fa fa-eye text-center p-3"></div>
									<h2 class="card-title text-center">Vision</h2>
									<p class="card-text text-center">To become the Premiere Banking and Housing Finance Institution with the leading market share in Zambia.</p>
								</div><!-- end card-body-->
								
								<div class="divider"></div>
								
								<div class="card card-icon">
									<div class="card-icon-img fa fa-calendar-check-o text-center p-3"></div>
									<h2 class="card-title text-center">Mission</h2>
									<p class="card-text text-center">To provide quality, affordable and sustainable Mortgage finance, financial services and other allied services for the benefit of clients, stakeholders and the society.</p>
								</div><!-- end card-body-->
							</div>

						</div><!--end card deck-->
							
					</div>
					
					<div class="content-panel tab-2 animated fadeIn">

						<h1 class="display-4 text-center">Board Of Directors</h1>
						
						<div class="card-deck">
							<div class="row col-12 chairman-card" style="text-align='center'">
								<?php 
									$sql="SELECT * FROM `directors` WHERE `Role`='Chairman'";
									$q1=mysqli_query($conn,$sql)or die(mysqli_error());
							   		$count=0;

									while ($row5 = mysqli_fetch_array($q1)) {
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
									$q1=mysqli_query($conn,$sql)or die(mysqli_error());
							   		$count=0;

									while ($row5 = mysqli_fetch_array($q1)) {
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
	
						</div><!--end card deck-->
					</div>
					
					<div class="content-panel tab-3 animated fadeIn">
						
						<h1 class="display-4 text-center">Senior Management</h1>

						<div class="card-deck">
						 
						 
						 <div class="row col-12 chairman-card" style="text-align='center'">
								<?php 
									 $sql="SELECT * FROM `employees_tbl` WHERE `Category`='Senior Management' AND `jobRole` LIKE'%Managing Director%' ";
									$q1=mysqli_query($conn,$sql);
							   		$count=0;

									while ($row5 = mysqli_fetch_array($q1)) {
									$count++;	
								?>
								<div class="col-md-6">
								<div class="card m-1">
									<img class="card-img-top" src="images/staff/<?php echo $row5['Picture']; ?>" >
									<h6 class="card-title text-center p-2"><?php echo $row5['Title']; ?> <?php echo $row5['first_name']; ?> <?php echo $row5['last_name']; ?></h6>
									<h5 class="card-title text-center"><?php echo $row5['jobRole']; ?> </h5>
								</div><!-- end card-body-->
								</div>
													 
								<?php				} ?>
											
							</div>
							<div class="row">
								<?php 
									
									$sql="SELECT * FROM `employees_tbl` WHERE `Category`='Senior Management' AND `jobRole` NOT LIKE'%Managing Director%' ";
									$q1=mysqli_query($conn,$sql)or die(mysqli_error());
									$count=0;

									while ($row5 = mysqli_fetch_array($q1)) {
									$count++;	
								?>
								<div class="card m-1">
									<img class="card-img-top" src="images/staff/<?php echo $row5['Picture']; ?>" >
									<h6 class="card-title text-center p-2"><?php echo $row5['first_name']; ?> <?php echo $row5['last_name']; ?></h6>
									<h5 class="card-title text-center"><?php echo $row5['jobRole']; ?> </h5>
								</div><!-- end card-body-->
								<?php
									 if($count==3 OR $count==6 Or $count==9 ){
										 echo '</div> <div class="row">';
									 }
								} ?>
							</div>

									
							
						</div><!--end card deck-->
					</div>
					
					<div class="content-panel tab-4 animated fadeIn">
						<h1 class="display-4 text-center">Background</h1>
						<hr>
						
						
						<p class="text-justify">		
						<?php 
								$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
								`At_status` FROM `articles` WHERE `At_sub_cat`='30'";
								$q1=mysqli_query($conn,$sql)or die(mysqli_error());


								while ($row5 = mysqli_fetch_array($q1)) {

								$title=$row5['At_Title'];
								echo $content=$row5['At_content'];
								?>
								
								
						</p>			
						</p>
							<?php if($row5['At_image']){ ?>	<img class="section-content-img" src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
							
								<?php } ?>	
						
						<p class="text-justify">
						<?php 
								$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
								`At_status` FROM `articles` WHERE `At_sub_cat`='18'";
								$q1=mysqli_query($conn,$sql)or die(mysqli_error());


								while ($row5 = mysqli_fetch_array($q1)) {

							$title=$row5['At_Title'];
								echo $content=$row5['At_content'];
								?>
								
								<?php if($row5['At_image']){ ?>	<img src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
								<?php } ?>	
						</p>
					</div>
									
					<div class="content-panel tab-5 animated fadeIn">
						
						<h1 class="display-4 text-center">Download Here</h1>
						<p class="text-justify">
						<?php   					  					 
							$downloadSQL="SELECT `Categoty_id`, `name` FROM `downlaod_categories`";
							$results=mysqli_query($conn,$downloadSQL);
							$count=0;
							while($row5=mysqli_fetch_array($results)){
							$count++; 
						?>
							
					<div id="accordion">
						<div class="row">
						  <div class="card col-12 p-0" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $count; ?>">
							<div class="card-header p-1" id="headingOne <?php echo $count; ?>">
							  <h5>
								<button class="btn btn-link text-white">
								  <?php  echo $row5['name']; ?>
								</button>
							  </h5>
							</div>
						  </div>

							<div id="collapse<?php echo $count; ?>" class="collapse" aria-labelledby="headingOne <?php if($count==1){?>show<?php } ?>" data-parent="#about">
							  <div class="card-body">
								<?php getDownloadItems($row5['Categoty_id']); ?>
							  </div>
							</div>
						  

						</div>
					</div><!--end accordion-->
							
<?php } ?>
						</p>
				</div>
				<div class="content-panel tab-21-tenders animated fadeIn">
					<h1 class="display-4 text-center">Running Tenders</h1>
					
					<?php 
						$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
						`At_status` FROM `articles` WHERE `At_sub_cat`='27'";
						$q1=mysqli_query($conn,$sql)or die(mysqli_error());


						while ($row5 = mysqli_fetch_array($q1)) {

						$title=$row5['At_Title'];
						$content=$row5['At_content'];
					?>
						
						
						<a data-toggle="modal" data-target="#tenders<?php echo $row5['article_id']; ?>"><h5 class="section-content-btn"><?php echo $title=$row5['At_Title']; ?></h5></a>
						<?php } ?>
					
						</div>

                        <div class="content-panel tab-21-tenders-notice animated fadeIn">
					<h1 class="display-4 text-center">Tender Award Notices</h1>
					
					<?php 
					 $sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
						`At_status` FROM `articles` WHERE `At_sub_cat`='26' AND `article_id`!='206'";
						$q1=mysqli_query($conn,$sql)or die(mysqli_error());


						while ($row5 = mysqli_fetch_array($q1)) {

						$title=$row5['At_Title'];
						$content=$row5['At_content'];
					?>
						
						
						<a data-toggle="modal" data-target="#tenders<?php echo $row5['article_id']; ?>"><h5 class="section-content-btn"><?php echo $title=$row5['At_Title']; ?></h5></a>
						<?php } ?>
						
						</div>	
                      <?php 

						$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
						`At_status` FROM `articles` WHERE `At_sub_cat`='28'";
						$q1=mysqli_query($conn,$sql)or die(mysqli_error());


						while ($row5 = mysqli_fetch_array($q1)) {

						$title=$row5['At_Title'];
						$content=$row5['At_content'];
					?>
					<div class="content-panel tab-21-proc-plan animated fadeIn">
					
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify"> <?php echo $content; ?> <br></p><?php if($row5['Document']){
							?> <a   class="button" target="_blank" style="animation-delay: 3s" href="Uploads/Document/<?php echo $row5['Document'] ?>">Download</a> <?php }?> 
					</div>
					
					<?php  
					
																} ?>

                   <?php 

						$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
						`At_status` FROM `articles` WHERE `article_id`='206'";
						$q1=mysqli_query($conn,$sql)or die(mysqli_error());


						while ($row5 = mysqli_fetch_array($q1)) {

						$title=$row5['At_Title'];
						$content=$row5['At_content'];
						 ?>
					<div class="content-panel tab-21-main animated fadeIn">
					
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify"> <?php echo $content; ?> <br></p><
							 </div>
					
					<?php  
					
																} ?>		
						
						
						
						
				</div><!--end section-content-->
				
				<div class="col-lg-3 col-md-4 section-read-more">

					<ul class="read-more-list">
						<a href="#about"><li class="active" data-list="tab-1-about">About Us</li></a>
						<a href="#about"><li  data-list="tab-1">Mission & Vision</li></a>
						<a href="#about"><li data-list="tab-2">Board of Directors</li></a>
						<a href="#about"><li data-list="tab-3">Senior Management</li></a>
						<a href="#about"><li data-list="tab-4">Background</li></a>
						<a href="#about"><li data-list="tab-5">Publications & Downloads </li></a>
						<li class="main-list-tab dropdown-toggle" data-list="tab-21-main"  data-toggle="collapse" data-target="#procurement">Procurement</li>
						<div class="drop-down">
							<ul class="p-0 collapse" id="procurement" data-list="tab-20" data-parent="#property">
								<a href="#about"><li data-list="tab-21-tenders">Running Tenders</li></a>
								<a href="#about"><li data-list="tab-21-tenders-notice">Tender Award Notices</li></a>
								<a href="#about"><li data-list="tab-21-proc-plan">Procurement Plan</li></a>
							</ul>
						</div>
						
					</ul>
				</div><!--end section-content-->
				
				<!--mobile list-->
				<div id="accordion">
					<div class="row">
					  <div class="card" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<div class="card-header" id="headingOne">
						  <h5 class="mb-0">
							<button class="btn btn-link" >
							  MISSION & VISION
							</button>
						  </h5>
						</div>
					  </div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#about">
						  <div class="card-body">
						  	<h1 class="display-4 text-center">Our Drive and Passion</h1>

							<p class="text-justify">		
								<?php 
									$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
									`At_status` FROM `articles` WHERE `At_sub_cat`='12'";
									$q1=mysqli_query($conn,$sql)or die(mysqli_error());


									while ($row5 = mysqli_fetch_array($q1)) {

									$title=$row5['At_Title'];
									echo $content=$row5['At_content'];
									}
								?>
							  </p>
						  </div>
						</div>
					  
					  <div class="card" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<div class="card-header" id="headingTwo">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed">
							 BOARD OF DIRECTORS
							</button>
						  </h5>
						</div>
					  </div>
					  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#about">
						  <div class="card-body">
							  <div class="card-deck">
								  <div class="row">
									<?php 
										$sql="SELECT * FROM `directors`";
										$q1=mysqli_query($conn,$sql)or die(mysqli_error());
								   $count=0;

										while ($row5 = mysqli_fetch_array($q1)) {
										$count++;	
									?>

									<div class="card m-1">
										<img class="card-img-top" src="images/staff/<?php echo $row5['picture']; ?>" >
										<h5 class="card-title text-center"><?php echo $row5['Title']; ?> <?php echo $row5['Firstname']; ?> <?php echo $row5['LastName']; ?></h5>
										<h6 class="card-title text-center"><?php echo $row5['Role']; ?> </h5>
									</div><!-- end card-body-->
									<?php
										 if($count==3 OR $count==6){
											 echo '</div> <div class="row">';
										 } ?>

									<?php				} ?>
								  </div>
							 </div>
						  </div>
					  </div>
					  
					  <div class="card" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<div class="card-header" id="headingThree">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed">
							  SENIOR MANAGERS
							</button>
						  </h5>
						</div>
					  </div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#about">
							<div class="card-body">
								<div class="card-deck">
									<div class="row">
									  <?php 
										$sql="SELECT * FROM `employees_tbl` WHERE `Category`='Senior Management'";
										$q1=mysqli_query($conn,$sql)or die(mysqli_error());
										$count=0;

										while ($row5 = mysqli_fetch_array($q1)) {
										$count++;							
										?>

										<div class="card m-1">
											<img class="card-img-top" src="images/staff/<?php echo $row5['Picture']; ?>" >
											<h5 class="card-title text-center"><?php echo $row5['first_name']; ?> <?php echo $row5['last_name']; ?></h5>
											<h6 class="card-title text-center"><?php echo $row5['jobRole']; ?> </h5>
										</div><!-- end card-body-->
										<?php
											 if($count==3 OR $count==6 Or $count==9 ){
												 echo '</div> <div class="row">';
											 }
										} ?>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="card" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<div class="card-header" id="headingFour">
							  <h5 class="mb-0">
								<button class="btn btn-link collapsed">
								BACKGROUND
								</button>
							  </h5>
							</div>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#about">
							<div class="card-body">
								<?php 
									$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
									`At_status` FROM `articles` WHERE `At_sub_cat`='18'";
									$q1=mysqli_query($conn,$sql)or die(mysqli_error());


									while ($row5 = mysqli_fetch_array($q1)) {

									$title=$row5['At_Title'];
									echo $content=$row5['At_content'];
									}
								?>							  
							</div>
						</div>
					  
					  <div class="card" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
						<div class="card-header" id="headingFive">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed">
							 PUBLICATIONS & DOWNLOAD
							</button>
						  </h5>
						</div>
					  </div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#about">
						  <div class="card-body">
								<?php   
							 		$downloadSQL="SELECT `Categoty_id`, `name` FROM `downlaod_categories`";
									$results=mysqli_query($conn,$downloadSQL);
									$count=0;
									while($row5=mysqli_fetch_array($results)){
									$count++; 
								?>
														
								<div id="accordion">
									<div class="row">
									  <div class="card col-12 p-0" data-toggle="collapse" data-target="#collapseDownloads<?php echo $count; ?>" aria-expanded="false" aria-controls="collapseDownloads<?php echo $count; ?>">
										<div class="card-header p-1" id="collapseDownload<?php echo $count; ?>">
										  <h5>
											<button class="btn btn-link text-white">
											  <?php  echo $row5['name']; ?>
											</button>
										  </h5>
										</div>
										</div>
										
										<div id="collapseDownloads<?php echo $count; ?>" class="collapse" aria-labelledby="collapseDownload<?php echo $count; ?>" data-parent="#collapseFive">
										  <div class="card-body">
											<?php getDownloadItems($row5['Categoty_id']); ?>
										  </div>
										</div>
									  

									</div>
								</div><!--end accordion-->
														
							<?php } ?>						  
							</div>
						</div>
						  <div class="card" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
						<div class="card-header" id="headingThirteen">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed">
							  TENDERS
							</button>
						  </h5>
						</div>
					  </div>
						<div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#about">
						  <div class="card-body">
                          <a data-toggle="modal" href="" data-target="#runningtenders"><h5 class="section-content-btn">Running Tenders</h5></a>
						  <a data-toggle="modal" href="" data-target="#awardNotices"><h5 class="section-content-btn">Tender Award Notices</h5></a>
						<a data-toggle="modal" href="" data-target="#proc_plan"><h5 class="section-content-btn">Procurement Plan</h5></a>
						  </div>
						</div>
					 
					  
					
						
					  </div><!--end row-->
					  	  
					</div>
				</div><!--end accordion-->