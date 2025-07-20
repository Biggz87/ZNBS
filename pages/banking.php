			<div class="row">
				
				<div class="col-lg-3 col-md-4 section-read-more">

					<ul class="read-more-list p-0">
						<a href="#banking"> <li class="main-list-tab active" data-list="tab-6">Banking</li></a>
						<a href="#banking"><li class="main-list-tab" data-list="tab-7">Branch Network</li></a>
						
						
						<li class="main-list-tab dropdown-toggle"  data-list="tab-8-account-201"  data-toggle="collapse" data-target="#collapseTypesofAccounts">Types of Accounts</li>
						<div class="drop-down">
							<ul class="p-0 collapse" id="collapseTypesofAccounts" data-list="tab-20" data-parent="#banking">

								<a href="#banking" ><li data-list="tab-8-account-savings">Savings Accounts</li></a>
								<a href="#banking" ><li data-list="tab-8-account-invest">Investiment Accounts</li></a>
								<a href="#banking" ><li data-list="tab-8-account-current">Business Accounts</li></a>
								
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
								<!--<a href="#banking"><li class="main-list-tab" data-list="tab-6_survey">QUICK SERVEY</li></a>-->
					</ul>
				</div><!--end section-content-->
				
				<div class="col-lg-6 col-md-8 section-content">
					<div id="Banking_space" class="content-panel tab-6 animated fadeIn">
					
					
						</div>
						
						
						
						<?php $sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_sub_cat`='22'";
							$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {
                             $id=$row5['article_id'];
							$title=$row5['At_Title'];
							$content=$row5['At_content']; ?>
							<div class="content-panel tab-6-digital<?php echo $row5['article_id']; ?> animated fadeIn">
								
								<h1 class="display-4 text-center"><?php echo $title; ?></h1> 
								
							
						
				
						
						<p class="text-justify"><?php  $exe = array("204", "60"); if (!in_array($id, $exe)){ echo $shortdesc = myTruncate($content, 500) ;} else{ echo $content; }  if(in_array($id, $exe)){} elseif($id!=61)
							{?><Br><Br><a class="section-content-btn"  data-toggle="modal" data-target="#Banking<?php echo $row5['article_id']; ?>" style="animation-delay: 3s;color:white;" >More</a><?php }  else{ ?> 	<a href="https://onlinebanking.znbs.co.zm/iProfits2/Login.aspx"><div class="horizontal-card col-12" data-list="tab-8-account-savings">
							<div class="row">
								<div class="col-md-4 p-0">
									<div class="horizontal-card__img"><img src="images/dig-banking.jpg"></div>
								</div>
								<div class="col-md-8">
									<div class="horizontal-card__info p-1">
										<h1 class="text-center p-1">Bank Online with us</h1>
										<p class="text-center">Click Here to Register/ Sign In</p>
									</div>
								</div>
							</div>
						
						</div></a><!--end horizontal-card--><?php } ?>
						
						
						<?php if($id==63){}else { if($row5['At_image']){?><img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'><?php } } ?>
						</p></div>
						<?php }  ?>
						
						<!--Mortgate Main-->
						<div id="mortgage_main" class="content-panel tab-6-Mortgage205 animated fadeIn">
							
							<a href="#banking"><div class="horizontal-card col-12" data-list="tab-6-Mortgage57">
								<div class="row">
									<div class="col-md-4 p-0">
										<div class="horizontal-card__img"><img src="Admin/images/62df87a37d46a_5f5905c06eda6_shutterstock_1731871171.jpg"></div>
									</div>
									<div class="col-md-8">
										<div class="horizontal-card__info p-1">
											<h1 class="text-center p-1">Mortgage Loan</h1>
											<p class="text-center">Caption goes here, Give brief description about the account</p>
										</div>
									</div>
								</div>

							</div></a><!--end horizontal-card-->

							<a href="#banking"><div class="horizontal-card col-12" data-list="tab-6-Mortgage58">
								<div class="row">
									<div class="col-md-4 p-0">
										<div class="horizontal-card__img"><img src="Admin/images/60140c162a736_shutterstock_1372225469.jpg"></div>
									</div>
									<div class="col-md-8">
										<div class="horizontal-card__info p-1">
											<h1 class="text-center p-1">Mortgage Requirements</h1>
											<p class="text-center">Caption goes here, Give brief description about the account</p>
										</div>
									</div>
								</div>
							</div></a><!--end horizontal-card-->

							<a href="#banking"><div class="horizontal-card col-12" data-list="tab-6-Mortgage232">
								<div class="row">
									<div class="col-md-4 p-0">
										<div class="horizontal-card__img"><img src="Admin/images/62f4d4be99e59_Diaspora Mortgage.jpg"></div>
									</div>
									<div class="col-md-8">
										<div class="horizontal-card__info p-1">
											<h1 class="text-center p-1">Diaspora Mortgage</h1>
											<p class="text-center">Caption goes here, Give brief description about the account</p>
										</div>
									</div>
								</div>

							</div></a><!--end horizontal-card-->
							
						</div>
						
						
						<!--Mortgate Loans-->
						
							<div id="Mortgage_loan" class="content-panel tab-6-Mortgage57 animated fadeIn">


</div>
						
						
							
						
						<!--Mortgate Requirement-->	
						<div id="mortgage_req" class="content-panel tab-6-Mortgage58 > animated fadeIn">
						
						</div>
							
						
						<!--Mortgate diasp-->
						<div id="diasp" class="content-panel tab-6-Mortgage232 animated fadeIn">
						
						</div>
					
						
					
						
						
						
						
						
						
						
						
						
						
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
										<p class="text-center">Save and secure your money with us at attractive interest rates</p>
									</div>
								</div>
							</div>
						
						</div></a><!--end horizontal-card-->
						
						<a href="#banking"><div class="horizontal-card col-12" data-list="tab-8-account-invest">
							<div class="row">
								<div class="col-md-4 p-0">
									<div class="horizontal-card__img"><img src="images/investment-accounts.jpg"></div>
								</div>
								<div class="col-md-8">
									<div class="horizontal-card__info p-1">
										<h1 class="text-center p-1">Investiment Accounts</h1>
										<p class="text-center">Invest with us</p>
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
										<p class="text-center">Grow your Business with us</p>
									</div>
								</div>
							</div>
						</div></a><!--end horizontal-card-->
					
					</div>
					
					<div id="branch_net" class="content-panel tab-7	 animated fadeIn">
						
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

								<li class="grey"><a href="#calculators" class="Button">Calculate Loan Repayment</a></li>
							  </ul>
							</div>
								
								
                            <?php } ?>
								
								
						</div>
						
						
					<!-----------------------------------------Business Accounts------------------------------------------------------>	
					<div class="content-panel tab-8-account-current animated fadeIn">
					<h1 class="display-4 text-center">Business Accounts</h1>
						<hr>
							<div id="business_accounts" class="row">
								
							</div><!--end row-->			
						
						</div>
					
					
						<!-----------------------------------------Savings Accounts------------------------------------------------------>
						<div class="content-panel tab-8-account-savings animated fadeIn">
						<h1 class="display-4 text-center">Savings Accounts</h1>
							<hr>
							<div id="savings_accounts" class="row">
								
							</div><!--end row-->
						
						</div>
						<div class="content-panel tab-8-account-invest animated fadeIn">
						<h1 class="display-4 text-center">Investment Accounts</h1>
							
							<hr>
							<div id="investment_accounts" class="row">
								
							</div><!--end row-->
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
				
				<div class="col-lg-3 section-img"></div>
				
			</div>