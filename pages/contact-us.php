			<div class="row">
				<div class="col-lg-3 col-md-4 section-read-more">

					<ul class="read-more-list p-0">
						<a href="#contact-us-section"><li class="main-list-tab active" data-list="tab-30-main">Contact Us</li>
						<a href="#contact-us-section"><li class="main-list-tab" data-list="tab-30-feedback">Feedback</li></a>
						<a href="#contact-us-section"><li class="main-list-tab" data-list="tab-30-complaint">Complaints</li></a>
						<a href="#contact-us-section"><li class="main-list-tab" data-list="tab-30-jobs">Career Oppotunities</li></a>
						<a href="#contact-us-section"><li class="main-list-tab" data-list="tab-30-atm">ATM Locater</li></a>
						<a href="#contact-us-section"><li class="main-list-tab" data-list="tab-301">Main Branch</li></a>
						<li class="main-list-tab dropdown-toggle" data-list="tab-301"  data-toggle="collapse" data-target="#collapseBranches">Other Branches</li>
						<div class="drop-down">
							<ul class="p-0 collapse" id="collapseBranches" data-list="tab-20" data-parent="#contact-us">
							 
							<?php 
								$sql="SELECT * FROM `branch_tbl` WHERE `branch_name`!='Main Branch'";
								$q1=mysqli_query($conn,$sql)or die(mysqli_error());


								while ($row5 = mysqli_fetch_array($q1)) {

							 ?>
						
								<a href="#contact-us-section"><li data-list="tab-30<?php echo $row5['branch_id']; ?>" onclick="LoadMap(<?php echo $row5['branch_id']; ?>)"><?php echo $row5['branch_name']; ?></li></a>
								
							<?php } ?>

							</ul>
						</div>
					
					
					</ul>
				</div><!--end section-read-more-->
				
				
				<div class="col-lg-6 col-md-8 section-content">
					<div id="contact-us-section">
						<div class="content-panel tab-30-main animated fadeIn">
						<h1 class="display-4 text-center">Submit Request</h1>
							<hr>
							<form action="" onsubmit="return false" method="">
								<div class="row m-2">
									<input class="input-box p-3" type="text" name="input" placeholder="Name" id="Name" >

									<input class="input-box p-3" type="text" name="input" placeholder="Email" id="email" ><br>
								</div>
								<div class="row m-2">
									<input class="input-box p-3" type="text" name="input" placeholder="Mobile Number" id="Number" >

									<input class="input-box p-3" type="text" name="input" placeholder="Subject" id="Subject" ><br>
								</div>
									<textarea class="message m-2" type="text" name="input" placeholder="Message" id="message" ></textarea><br>

									<input class="p-3 m-2" type="submit" value="Send" onclick="sendEnquiry()" id="send-btn" />
							</form>
							<div id="ResponseMesage"></div>
							</div>
							<div class="content-panel tab-30-complaint animated fadeIn">
					<h1 class="display-4 text-center">Send your Complaint Here</h1>
						<form action="" onsubmit="return false" method="">
							<div class="row m-2">
								<input class="input-box p-3" type="text" name="input" placeholder="Name" id="Name1" >

								<input class="input-box p-3" type="text" name="input" placeholder="Email" id="email1" ><br>
							</div>
							<div class="row m-2">
								<input class="input-box p-3" type="text" name="input" placeholder="Mobile Number" id="Number1" >

								<input class="input-box p-3" type="text" name="input" placeholder="Subject" id="Subject1" ><br>
							</div>
								<textarea class="message m-2" type="text" name="input" placeholder="Complaint Details" id="message1" ></textarea><br>

								<input class="p-3 m-2" type="submit" value="Send" onclick="sendComplaint()" id="send-btn" />

						</form>
						<div id="ResponseComplaints"></div>
						</div>

						<div class="content-panel tab-30-feedback animated fadeIn">
							<h1 class="display-4 text-center">Feedback</h1>



							<h2>Rate Our Services</h2>

								<select  onChange='LoadFeedbackForm()' id="feeddrop" class="form-control align-items-center" searchable="Search here..">
								  <option value="" disabled selected>--Choose The Product--</option>
								   <?php 

														$sql="SELECT `survey_id`, `Survey_title`, `startdate`, `enddate`, `status`, `category_id` FROM `surveys` WHERE `category_id`='2' AND `status`='Published'";
														$q1=mysqli_query($conn,$sql);


														while ($row5 = mysqli_fetch_array($q1)) {


												  ?>
								  <option   value="<?php echo $row5['survey_id'] ?>"><?php echo $row5['Survey_title'] ?></option>


									<?php  

																	} ?>



									</select>
									<br><br>
									<div id="feebackplace" ></div>
									<div id="feebackResponse1" ></div>



						</div>

						<?php 	
							$sql="SELECT `branch_id`, `branch_name`, `Address1`, `Address 2`, `Town`, `Contact_no1`, `Contact_no2`, `email`, `google_map` FROM `branch_tbl`";
							$q1=mysqli_query($conn,$sql)or die(mysqli_error());


							while ($row5 = mysqli_fetch_array($q1)) {

							$title=$row5['branch_name'];
						?>

						<div class="content-panel tab-30<?php echo $row5['branch_id']; ?> animated fadeIn">

							<h1 class="display-4 text-center"><?php echo $title; ?></h1>
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

								</div>
							</div>
						</div>


						<?php  

																	} ?>

	<div class="content-panel tab-30-jobs animated fadeIn">	
	<h1 class="display-4 text-center">Job Vacancies</h1>


					  <?php 

							$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_sub_cat`='29'";
							$q1=mysqli_query($conn,$sql)or die(mysqli_error());


							while ($row5 = mysqli_fetch_array($q1)) {


					  ?>


					<a data-toggle="modal" href="" data-target="#jobs<?php echo $row5['article_id']; ?>"><h5 class="section-content-btn"><?php echo $title=$row5['At_Title']; ?></h5></a>

						<?php  

																	} ?>

					   </div>	
	<div class="content-panel tab-30-atm animated fadeIn">	
	<h1 class="display-4 text-center">Find ATM Machine</h1>
					<div class="align-items-center">	
				<select  onChange='LoadATM()' id="city" class="form-control align-items-center" searchable="Search here..">
	  <option value="" disabled selected>--Choose the City/Area--</option>
	   <?php 

							$sql="SELECT `Id`, `city`, `Loacation_coodinates`, `place_location` FROM `atms`";
							$q1=mysqli_query($conn,$sql)or die(mysqli_error());


							while ($row5 = mysqli_fetch_array($q1)) {


					  ?>
	  <option   value="<?php echo $row5['Id'] ?>"><?php echo $row5['city'] ?>-<?php echo $row5['place_location'] ?></option>


						<?php  

																	} ?>



	</select>

	</div>
	<br><br>
	<div id="map" ></div>







					   </div>					   

					</div>	
				</div><!--end section-content-->
				
				
				<div class="col-lg-3 col-md-12 section-img">
					<div class="section-img-caption">
						<h1>Customer Service</h1>
						<hr>
						<h4>Call Center:</h4>
						<div class="row"><i class="fa fa-phone-square col-1"></i><p class="col-10">686</p></div>
						<h4>Call / Whats App:</h4>
						<div class="row"><i class="fa fa-whatsapp col-1"></i><p class="col-9">0955133159</p></div>
						<div class="row"><i class="fa fa-whatsapp col-1"></i><p class="col-9">0955133639</p></div>
						<div class="row"><i class="fa fa-whatsapp col-1"></i><p class="col-9">0953162743</p></div>
						<h4>Email:</h4>
						<div class="row"><i class="fa fa-envelope col-1"></i><p class="col-10">customerservice@znbs.co.zm</p></div>
						<div class="row contact-us-socials">
							<a href="https://www.facebook.com/Zambia-National-Building-Society-155197338006117" target="_blank"><i class="link-1 fa fa-facebook-square col-2 m-1"></i></a>
							<a href="https://www.twitter.com/societyzambia" target="_blank"><i class="link-2 fa fa-twitter-square col-2 m-1"></i></a>
							<a href="https://www.linkedin.com/company/zambia-national-building-society" target="_blank"><i class="link-3 fa fa-linkedin-square col-2 m-1"></i></a>
							<a data-toggle="modal" href="" data-target="#youtube"><i class="link-4 fa fa-youtube-square col-2 m-1"></i></a>
						</div>
					</div>
				</div>
			</div><!--end row-->