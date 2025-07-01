			<div class="row">
				
				<div class="col-lg-3 col-md-4 section-read-more">

					<ul class="read-more-list p-0">
						<a href="#banking"><li class="main-list-tab active" data-list="tab-6">Banking</li></a>
						<a href="#banking"><li class="main-list-tab" data-list="tab-7">Branch Network</li></a>
						
						<li class="main-list-tab dropdown-toggle"  data-list="tab-8-account-201"  data-toggle="collapse" data-target="#collapseTypesofAccounts">Types of Accounts</li>
						<div class="drop-down">
							<ul class="p-0 collapse" id="collapseTypesofAccounts" data-list="tab-20" data-parent="#banking">

								<a href="#banking"><li data-list="tab-8-account-savings">Savings Accounts</li></a>
								<a href="#banking"><li data-list="tab-8-account-invest">Investiment Accounts</li></a>
								<a href="#banking"><li data-list="tab-8-account-current">Business Accounts</li></a>
								
							</ul>
						</div>
						
						<li class="main-list-tab dropdown-toggle" data-list="tab-6-digital204"  data-toggle="collapse" data-target="#collapseMobileBanking" aria-expanded="false" aria-controls="collapseTwo">Digital Banking</li>
						<div class="drop-down">
							<ul class="p-0 collapse"  id="collapseMobileBanking" data-list="tab-20" aria-labelledby="heading1" data-parent="#banking">
								<?php $sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
										`At_status` FROM `articles` WHERE `At_sub_cat`='22' AND `article_id`!='204'";
										$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

										$title=$row5['At_Title'];
										$content=$row5['At_content']; ?>
									 
								<a href="#banking"><li data-list="tab-6-digital<?php echo $row5['article_id']; ?>"><?php echo $row5['At_Title']; ?></li></a>
								<?php  } ?>

							</ul>
						</div>
						
								<a href="#banking"><li class="main-list-tab" data-list="tab-18">Banking Loans</li></a>
						
						<li class="main-list-tab dropdown-toggle" data-list="tab-6-Mortgage205"  data-toggle="collapse" data-target="#collapseMortgages">Mortgages</li>
						<div class="drop-down">
							<ul class="p-0 collapse"  id="collapseMortgages" data-list="tab-20" data-parent="#banking">
								<?php 
									$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
									`At_status` FROM `articles` WHERE `At_sub_cat`='24' AND `article_id`!='205'";
									$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

									$title=$row5['At_Title'];
									$content=$row5['At_content'];
								?>
								<a href="#banking"><li data-list="tab-6-Mortgage<?php echo $row5['article_id']; ?>"><?php echo $row5['At_Title']; ?></li></a>
								<?php  } ?>
								
							</ul>
						</div>
								<a href="#banking"><li class="main-list-tab" data-list="tab-6_survey">QUICK SERVEY</li></a>
					</ul>
				</div><!--end section-content-->
				
				<div class="col-lg-6 col-md-8 section-content">
					<div class="content-panel tab-6 animated fadeIn">
					
						<?php 
							$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_sub_cat`='1'";
							$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

							$title=$row5['At_Title'];
							$content=$row5['At_content'];
						?>
						
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify"><?php echo $content; ?>
						
						</p>
						<?php } ?>
						</div>
						
						<?php $sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_sub_cat`='24'";
							$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

							$title=$row5['At_Title'];
							$content=$row5['At_content']; ?>
							<div class="content-panel tab-6-Mortgage<?php echo $row5['article_id']; ?> animated fadeIn">
				
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify"><?php echo $content; ?>
						<?php if($row5['At_image']){?><img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'><?php } ?>
						</p></div>
						<?php } ?>
						
						<?php $sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_sub_cat`='22'";
							$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {
                             $id=$row5['article_id'];
							$title=$row5['At_Title'];
							$content=$row5['At_content']; ?>
							<div class="content-panel tab-6-digital<?php echo $row5['article_id']; ?> animated fadeIn">
				
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify"><?php echo $shortdesc = myTruncate($content, 500); if($id!=61)
							{?><a  style="maximum_width:30px" data-toggle="modal" data-target="#Digitalbanking<?php echo $row5['article_id']; ?>"><p style="color: Blue;text-style:bold">Read More</p></a><?php }else{ ?> 	<a href="https://onlinebanking.znbs.co.zm/iProfits2/Login.aspx"><div class="horizontal-card col-12" data-list="tab-8-account-savings">
							<div class="row">
								<div class="col-md-4 p-0">
									<div class="horizontal-card__img"><img src="images/slide1.jpg"></div>
								</div>
								<div class="col-md-8">
									<div class="horizontal-card__info p-1">
										<h1 class="text-center p-1">Bank Online with us</h1>
										<p class="text-center">Click Here to Register/ Sign In</p>
									</div>
								</div>
							</div>
						
						</div></a><!--end horizontal-card--><?php } ?>
						<?php if($row5['At_image']){?><img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'><?php } ?>
						</p></div>
						<?php } ?>
						
					<!-----------------------------------------Types of accounts------------------------------------------------------>
					<div class="content-panel tab-8-account-201 animated fadeIn">
						<h1 class="text-center display-4">Types Of Accounts</h1>
						<hr>
						<a href="#banking"><div class="horizontal-card col-12" data-list="tab-8-account-savings">
							<div class="row">
								<div class="col-md-4 p-0">
									<div class="horizontal-card__img"><img src="images/savings-accounts.jpg"></div>
								</div>
								<div class="col-md-8">
									<div class="horizontal-card__info p-1">
										<h1 class="text-center p-1">Savings Accounts</h1>
										<p class="text-center">Caption goes here, Give brief description about the account</p>
									</div>
								</div>
							</div>
						
						</div></a><!--end horizontal-card-->
						
						<a href="#banking"><div class="horizontal-card col-12" data-list="tab-8-account-invest">
							<div class="row">
								<div class="col-md-4 p-0">
									<div class="horizontal-card__img"><img src="images/investiment-accounts.jpg"></div>
								</div>
								<div class="col-md-8">
									<div class="horizontal-card__info p-1">
										<h1 class="text-center p-1">Investiment Accounts</h1>
										<p class="text-center">Caption goes here, Give brief description about the account</p>
									</div>
								</div>
							</div>
						</div></a><!--end horizontal-card-->
						
						<a href="#banking"><div class="horizontal-card col-12" data-list="tab-8-account-current">
							<div class="row">
								<div class="col-md-4 p-0">
									<div class="horizontal-card__img"><img src="images/business-accounts.jpg"></div>
								</div>
								<div class="col-md-8">
									<div class="horizontal-card__info p-1">
										<h1 class="text-center p-1">Business Accounts</h1>
										<p class="text-center">Caption goes here, Give brief description about the account</p>
									</div>
								</div>
							</div>
						</div></a><!--end horizontal-card-->
					
					</div>
					
					<div class="content-panel tab-7 animated fadeIn">
						<?php 
							$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_sub_cat`='20'";
							$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

							$title=$row5['At_Title'];
							$content=$row5['At_content'];
						?>
						
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify">
						<img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'>
						</p>
						<?php } ?>
						</div>
					
						<!-----------------------------------------Banking Loans------------------------------------------------------>
						<div class="content-panel tab-18 animated fadeIn">
												 

							<h1 class="display-4 text-center">Banking Loans</h1>
							<hr>
							<?php


							$sql="SELECT * FROM `loan_types` WHERE `loan_name`!='Mortgage'";
							$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {



							 ?>
							<div class="columns">
							  <ul class="price" >
								<li class="header" style="background-color:rgba(244,130,34,1)" ><?php echo $row5['loan_name']; ?></li>
								
								<li><?php echo $row5['textentered']; ?></li>
								<li>Maximum tenure: <?php echo $row5['maximum_tanure']; ?> Months</li>

								<li class="grey"><a href="#" class="Button">Apply</a></li>
							  </ul>
							</div>
								
								
                            <?php } ?>
								
								
						</div>
						
						
					<!-----------------------------------------Business Accounts------------------------------------------------------>	
					<div class="content-panel tab-8-account-current animated fadeIn">
					<h1 class="display-4 text-center">Business Accounts</h1>
						<hr>
					<?php 
						//types of accounts
					
					
						$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
						`At_status` FROM `articles` WHERE `At_sub_cat`='43'";
						$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

						$title=$row5['At_Title'];
						$content=$row5['At_content'];
						 ?>
						
						   	<div id="thumbnail-preview" class=" col-lg-6 col-md-6 col-sm-12">
								<a data-toggle="modal" data-target="#accounts<?php echo $row5['article_id']; ?>">
									<div id="thumbnail-previewImg">
										<div class=" overlay2">
											<h2><?php echo $title=$row5['At_Title']; ?></h2><br>

											<p class="text-center">Click to learn more</p><br>

										
										</div><!--end overlay2-->
										<?php if($row5['At_image']) { ?>
										<img src="Admin/images/<?php echo $row5['At_image']; ?>"/>
									
										
										<?php } ?>
									</div><!--end thumbnail-previewImg-->
									</a>
								</div><!--end thumbnail-preview-->
								
						
                        <?php } ?>						
						
						</div>
					
						<!-----------------------------------------Savings Accounts------------------------------------------------------>
						<div class="content-panel tab-8-account-savings animated fadeIn">
						<h1 class="display-4 text-center">Savings Accounts</h1>
							<hr>
							<div class="row">
								
								
								<?php 
						//types of accounts
					
					
						$sql="SELECT * FROM `articles` WHERE `At_sub_cat`='40'";
						$stmt = $conn2->query($sql);

                     $i=0;
						while ($row5 = $stmt->fetch()) {
                        $i++;
						
						$content=$row5['At_content'];
						
						 ?>
						 
							
									<div id="thumbnail-preview" class=" col-lg-6 col-md-6 col-sm-12">
								<a data-toggle="modal" data-target="#accounts<?php echo $row5['article_id']; ?>">
									<div id="thumbnail-previewImg">
										<div class=" overlay2">
											<h2><?php echo $title=$row5['At_Title']; ?></h2><br>

											<p class="text-center">Click to learn more</p><br>

										
										</div><!--end overlay2-->
										<?php if($row5['At_image']) { ?>
										<img src="Admin/images/<?php echo $row5['At_image']; ?>"/>
									
										
										<?php } ?>
									</div><!--end thumbnail-previewImg-->
									</a>
								</div><!--end thumbnail-preview-->
								
										
										<?php } ?>

							
								
							</div><!--end row-->
						
						</div>
						<div class="content-panel tab-8-account-invest animated fadeIn">
						<h1 class="display-4 text-center">Investment Accounts</h1>
					<?php 
						//types of accounts
					
					
						$sql="SELECT * FROM `articles` WHERE `At_sub_cat`='41'";
						$stmt = $conn2->query($sql);


						while ($row5 = $stmt->fetch()) {

						$title=$row5['At_Title'];
						$content=$row5['At_content'];
						 ?>
					
								<div id="thumbnail-preview" class=" col-lg-6 col-md-6 col-sm-12">
								<a data-toggle="modal" data-target="#accounts<?php echo $row5['article_id']; ?>">
									<div id="thumbnail-previewImg">
										<div class=" overlay2">
											<h2><?php echo $title=$row5['At_Title']; ?></h2><br>

											<p class="text-center">Click to learn more</p><br>

										
										</div><!--end overlay2-->
										<?php if($row5['At_image']) { ?>
										<img src="Admin/images/<?php echo $row5['At_image']; ?>"/>
										
										<?php } ?>
									</div><!--end thumbnail-previewImg-->
									</a>
								</div><!--end thumbnail-preview-->
								
						 
					   
						

                        <?php } ?>						
						
						</div>
						<div class="content-panel tab-6_survey animated fadeIn">
						<h1 class="text-center display-4">Quick Survey</h1>
						  <?php  
												
					  $propertySQL="SELECT `survey_id`, `Survey_title`, `startdate`, `enddate`, `status` FROM `surveys` WHERE `status`='Published' LIMIT 1 ";
																$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {
																 
								?>
						<form action="" Onsubmit='return false' id="Form_survey" method="submit" class="p-4">
							<input class="form-control" type="text" id="FirstName" placeholder="First Name" required>
							<br>
                             <input class="form-control" type="text" id="LastName" placeholder="Last  Name" required><span></span><br>
							<input type="email" class="form-control" id="Email" placeholder="Your Email" required><br>
							<input type="text" class="form-control" hidden id="survey_id" value="<?php  echo $row5['survey_id']; ?>"  ><br>
							<?php GetQuestions($row5['survey_id']) ?>
							
							
							
							<br>

							<input class="section-content-btn" type="submit" onclick='' value="Submit" />
						</form>
						              <?php   
											}
            ?>
						<div id="Survey_Response"> </div></div>
					
					
					
					
					
					
					<div class="content-panel tab-10 animated fadeIn">
						<h1 class="display-2 text-center">Company Profile</h1>
						<h1 class="display-4 text-center">Download Here</h1>
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime, esse possimus architecto sunt natus reprehenderit debitis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime.<br><br>

						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime, esse possimus architecto sunt natus reprehenderit debitis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime.</p>
					</div>
					
					
					<div class="content-panel tab-11 animated fadeIn">
						<h1 class="display-2 text-center">Downloads</h1>
						<h1 class="display-4 text-center">Download Here</h1>
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime, esse possimus architecto sunt natus reprehenderit debitis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime.<br><br>

						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime, esse possimus architecto sunt natus reprehenderit debitis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quos cumque odio soluta harum error sequi laudantium, est nam perspiciatis eveniet maxime.</p>
					</div>
				</div><!--end section-content-->
				
				<!--mobile list-->
				<div id="accordion">
				  <div class="row">
					  <div class="card" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
						<div class="card-header" id="headingSeven">
						  <h5 class="mb-0">
							<button class="btn btn-link">
							  BRANCH NETWORK
							</button>
						  </h5>
						</div>
					  </div>
						<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#banking">
						  <div class="card-body">
							<?php 
								$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
								`At_status` FROM `articles` WHERE `At_sub_cat`='20'";
								$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

								$title=$row5['At_Title'];
								$content=$row5['At_content'];
							 ?>
						
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify">
						<img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'>
						</p>
						<?php } ?>  </div>
						</div>
					  
					  <div class="card" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
						<div class="card-header" id="headingEight">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed">
							  TYPES OF ACCOUNTS
							</button>
						  </h5>
						</div>
					  </div>
						<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#banking">
						  <div class="card-body">
							<?php 

								$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
								`At_status` FROM `articles` WHERE `At_sub_cat`='21'";
								$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

							?>

				<a data-toggle="modal" href="" data-target="#types<?php echo $row5['article_id']; ?>"><h5 class="section-content-btn"><?php echo $title=$row5['At_Title']; ?></h5></a>
	
					<?php  
					
																} ?>	  
						  </div>
						</div>
					  
					  <div class="card" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
						<div class="card-header" id="headingNine">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed">
							  DIGITAL BANKING
							</button>
						  </h5>
						</div>
					  </div>
						<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#banking">
						  <div class="card-body">
                          <?php 
					
					
							$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_sub_cat`='22' AND `article_id`!='204'";
							$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

						  ?>
					

				<a data-toggle="modal" href="" data-target="#digital<?php echo $row5['article_id']; ?>"><h5 class="section-content-btn"><?php echo $title=$row5['At_Title']; ?></h5></a>
	
					<?php  
					
																} ?>
						  </div>
						</div>
					  
					  <div class="card" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
						<div class="card-header" id="headingTen">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed">
							  BANKING LOANS
							</button>
						  </h5>
						</div>
					  </div>
						<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#banking">
						  <div class="card-body">
						  <h1 class="display-4 text-center">BANKING LOANS</h1>
								<?php

									$sql="SELECT `loan_id`, `loan_name`, `interest`, `maximum_tanure`, `minum_tanure` FROM `loan_types` WHERE `loan_name`!='Mortgage'";
									$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {



								?>
								<div class="columns">
								  <ul class="price" >
									<li class="header" style="background-color:rgba(201,96,10,1)" ><?php echo $row5['loan_name']; ?></li>
									
									<li>Get Upto ZMW 1,000,000.00</li>
									<li>Maximum tenure: <?php echo $row5['maximum_tanure']; ?> Months</li>
									
									<li class="grey"><a href="#" class="Button">Apply</a></li>
								  </ul>
								</div>
								
								
                            <?php } ?>
								
						  </div>
						</div>
					  
					  <div class="card" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
						<div class="card-header" id="headingEleven">
						  <h5 class="mb-0">
							<button class="btn btn-link collapsed">
							  MORTGAGES
							</button>
						  </h5>
						</div>
					  </div>
						<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#banking">
						  <div class="card-body">
                            <?php 

								$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
								`At_status` FROM `articles` WHERE `At_sub_cat`='24'";
								$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {


							?>
					

				<a data-toggle="modal" href="" data-target="#mortgage<?php echo $row5['article_id']; ?>"><h5 class="section-content-btn"><?php echo $title=$row5['At_Title']; ?></h5></a>
	
					<?php  
					
																} ?>
						  </div>
						</div>
						    <div class="card" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							<div class="card-header" id="headingSix">
							  <h5 class="mb-0">
								<button class="btn btn-link collapsed">
								  QUICK SERVEY
								</button>
							  </h5>
							</div>
						</div>
						<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#banking">
						  <div class="card-body">
                           <h1 class="text-center display-4">QUICK SURVEY</h1>
						     <?php  
							
  $propertySQL="SELECT `survey_id`, `Survey_title`, `startdate`, `enddate`, `status` FROM `surveys` WHERE `status`='Published' LIMIT 1 ";
											$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {
											 
            ?>
						<form action="" Onsubmit='return false' id="Form_survey" method="submit" class="p-4">
							<input class="form-control" type="text" id="FirstName" placeholder="First Name" required>
							<br>
                             <input class="form-control" type="text" id="LastName" placeholder="Last  Name" required><span></span><br>
							<input type="email" class="form-control" id="Email" placeholder="Your Email" required><br>
							<input type="text" class="form-control" hidden id="survey_id" value="<?php  echo $row5['survey_id']; ?>"  ><br>
							<?php GetQuestions($row5['survey_id']) ?>
							
							
							
							<br>

							<input class="section-content-btn" type="submit" onclick='' value="Submit" />
						</form>
						              <?php   
											}
            ?>
						<div id="Survey_Response1"> </div>
						  </div>
						</div>
					  
					</div><!--row-->
				</div><!--end accordion-->
				
				<div class="col-lg-3 section-img"></div>
				
			</div>