				<div class="row">
					<div class="col-lg-4 col-md-12 section-content-left">
						<div class="overlay-white"></div>
						<div class="section-content">
							<h1 class="text-center fade-in-left">Banking Loan Calculator</h1>
							<h2 class="text-center fade-in-left">Calculate Your Repayments</h2>
							<form action="" Onsubmit='Return false' id="loan_calculator_form" method="submit" class="p-4">
								<select class="input-box p-3 m-2 fade-in-left"  name="input"  id="product_loan" required >
								<option value=''>--Select Product--</option>
									<?php 
					$prod_sql="SELECT `loan_id`, `loan_name`, `interest`, `maximum_tanure`, `minum_tanure` FROM `loan_types`  WHERE `loan_name`!='Mortgage'";
					$product = mysqli_query($conn,$prod_sql);
						while ($row = mysqli_fetch_array($product)) {
							?>
								<option value='<?php echo $row['interest']; ?>'><?php echo $row['loan_name']; ?></option>
						<?php } ?>
								</select>
								<br>
								 <input class="input-box p-3 m-2 fade-in-left" type="number" name="input"  placeholder="Period (Months)" id="period_loan" required><span id="period_response_loan" ></span><br>
								<input class="input-box p-3 m-2 fade-in-left" type="number" name="input" placeholder="Amount (ZMK)" id="amount_loan" required ><br>

								<input class="p-3 m-2 fade-in-left" type="submit" onclick='' value="Calculate" id="calculate-btn" />
							</form>
							<div id="loan_repayment_response"> </div>
						</div><!--end section-content-->
					</div><!--end section-content-left-->

					<div class="col-lg-4 section-img"></div>

					<div class="col-lg-4 col-md-12  section-content-right">
						<div class="overlay-white"></div>
						<div class="section-content">
							<h1 class="text-center fade-in-right">Mortgage Loan Calculator</h1>
							<h2 class="text-center fade-in-right">Calculate Your Repayments</h2>
							<form action="" method="POST" Onsubmit='Return false' class="p-4" id='Modgage_calculator_form'>
								<select class="input-box p-3 m-2 fade-in-right"  name="input"  id="product_modgage" required>
								<option value=''>--Select Product--</option>
									<?php 
					$prod_sql="SELECT `loan_id`, `loan_name`, `interest`, `maximum_tanure`, `minum_tanure` FROM `loan_types` WHERE `loan_name`='Mortgage'";
					$product = mysqli_query($conn,$prod_sql);
						while ($row = mysqli_fetch_array($product)) {
							?>
								<option value='<?php echo $row['interest']; ?>'><?php echo $row['loan_name']; ?></option>
						<?php } ?>
								</select>
								<br>
								 <input class="input-box p-3 m-2 fade-in-right" type="number" name="input" placeholder="Period (Months)"  id="period_Mortgage" required><span id="period_response_mortgage" ></span><br>
								<input class="input-box p-3 m-2 fade-in-right" type="number" name="input" placeholder="Amount (ZMK)" id="amount_Mortgage" required><br>

								<input class="p-3 m-2 fade-in-right" type="submit" onclick='' value="Calculate" id="calculate-btn" />
							</form>
							<div id="Mortgage_repayment_response"> </div>
						</div><!--end section-content-->

					</div><!--end section-content-right-->

				</div><!--row-->