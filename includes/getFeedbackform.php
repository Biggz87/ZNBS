	<?php //$dbuser='mweemba';
		//	$dbuser=$_POST['user'];
			include 'SurveyFunctions.php';
			$survey_id=$_POST['survey_id'];
		include'../includes/Dbconnect.php';	

		
	
												
					  $propertySQL="SELECT `survey_id`, `Survey_title`, `startdate`, `enddate`, `status`, `category_id` FROM `surveys` WHERE `status`='Published' AND  `survey_id`='$survey_id'  LIMIT 1 ";
																$results=mysqli_query($conn,$propertySQL);
																
																while($row5=mysqli_fetch_array($results)){
																 
								?>
						<form action="" Onsubmit='return false' id="feedbackForm" method="submit" class="p-4">
							<input class="form-control" type="text" id="FirstName2" placeholder="First Name" required>
							<br>
                             <input class="form-control" type="text" id="LastName2" placeholder="Last  Name" required><span></span><br>
							<input type="email" class="form-control" id="Email2" placeholder="Your Email" required><br>
							<input type="text" class="form-control" hidden id="survey_id2" value="<?php  echo $row5['survey_id']; ?>"  ><br>
							<?php GetQuestions2($row5['survey_id']) ?>
							
							
							
							<br>

							<input class="section-content-btn" type="submit" onclick='submitFeddback()' value="Submit" />
						</form>
						              <?php   
											}
            
						 
					
			
		?>