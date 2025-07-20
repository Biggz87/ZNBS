	 <?php   
	 include'../includes/functions.php';
		include'../includes/Dbconnect2.php';						 
  $propertySQL="SELECT * FROM `property` JOIN `properties_imagess` ON `property`.`prop_id`=`properties_imagess`.`prop_id`  WHERE  `status`='Available' AND `featured`='Yes' AND `properties_imagess`.`thumb`='1' ORDER BY RAND()";
											
											$stmt = $conn2->query($propertySQL);
											$stmt->execute();
											while( $row5 = $stmt->fetch()){
											 
            ?>
								<div id="thumbnail-preview" class=" col-lg-6 col-md-6 col-sm-12">
								<a data-toggle="modal" href="" data-target="#gallery-modal_<?php echo $row5['prop_id']; ?>">
									<div id="thumbnail-previewImg">
										<div class=" overlay2">
											

											<h2>ZMW <?php echo  CurrencyFormat($row5['price_range']); ?></h2>
									
									<div class="row">
										<div class="col-sm-6">
										<p>Location<br>
										Plot Size
										</p>
										</div>

										<div class="col-sm-6">
										<p><?php echo $row5['location_Area']; ?><br>

										<?php echo $row5['plot_size_length']; ?> By <?php echo $row5['plot_size_width']; ?>
										</p>
											</div>
											
											</div>
											<span align="center">read more</span>
											
										</div><!--end overlay2-->
										<img src="Admin/images/<?php echo $row5['name'];?>" />
									</div><!--end thumbnail-previewImg-->
									</a>
								</div><!--end thumbnail-preview-->
								
								
								<?php } ?>
