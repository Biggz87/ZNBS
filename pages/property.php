			<div class="row">
				<div class="col-lg-3 section-img"></div>
				
				<div class="col-lg-6 col-md-8 section-content">
					
					<div class="content-panel tab-for-sale animated fadeIn">
						<h1 class="display-4 text-center">Properties for Sale</h1>
						<hr>
						<div class="row">
								
							<div id="thumbnail-preview" class=" col-lg-6 col-md-6 col-sm-12">
								<a data-toggle="modal" href="" data-target="#gallery-modal">
									<div id="thumbnail-previewImg">
										<div class=" overlay2">
											<h2>Property for Sale</h2><br>

											<p class="text-center">Click to learn more</p><br>

											<p2>read more ></p2>
										</div><!--end overlay2-->
										<img src="images/property (1).jpg"/>
									</div><!--end thumbnail-previewImg-->
								</a>
							</div><!--end thumbnail-preview-->


							<div id="thumbnail-preview" class=" col-lg-6 col-md-6 col-sm-12">
								<a data-toggle="modal" href="" data-target="#gallery-modal">
									<div id="thumbnail-previewImg">
										<div class=" overlay2">
											<h2>Property for Sale</h2><br>

											<p class="text-center">Click to learn more</p><br>

											<p2>read more ></p2>
										</div><!--end overlay2-->
										<img src="images/property (5).jpg"/>
									</div><!--end thumbnail-previewImg-->
								</a>
							</div><!--end thumbnail-preview-->

							<div id="thumbnail-preview" class=" col-lg-6 col-md-6 col-sm-12">
								<a data-toggle="modal" href="" data-target="#gallery-modal">
									<div id="thumbnail-previewImg">
										<div class=" overlay2">
											<h2>Property for Sale</h2><br>

											<p class="text-center">Click to learn more</p><br>

											<p2>read more ></p2>
										</div><!--end overlay2-->
										<img src="images/property (3).jpg"/>
									</div><!--end thumbnail-previewImg-->
								</a>
							</div><!--end thumbnail-preview-->

							<div id="thumbnail-preview" class=" col-lg-6 col-md-6 col-sm-12">
								<a data-toggle="modal" href="" data-target="#gallery-modal">
									<div id="thumbnail-previewImg">
										<div class=" overlay2">
											<h2>Property for Sale</h2><br>

											<p class="text-center">Click to learn more</p><br>

											<p2>read more ></p2>
										</div><!--end overlay2-->
										<img src="images/property (4).jpg"/>
									</div><!--end thumbnail-previewImg-->
								</a>
							</div><!--end thumbnail-preview-->

						</div><!--end row-->
					</div>
					<?php 

						$sql="SELECT * FROM `articles` WHERE `At_category`='6'";
						$q1=mysqli_query($conn,$sql)or die(mysqli_error());


						while ($row5 = mysqli_fetch_array($q1)) {

						$title=$row5['At_Title'];
						$content=$row5['At_content'];
					?>
					
					<div class="content-panel tab-21-prop-64 animated fadeIn">
					
						<h1 class="display-4 text-center">ZNBS properties</h1>
						
						<hr>
						<div class="card-deck">
							
							<div class="row">
								<div class="card card-icon col-md-4 p-1">
									<div class="card-icon-img fa fa-map-marker text-center p-3"></div>
									<h3 class="card-title text-center">Choma</h3>
									<p class="card-text text-left">
										<span><i class=" fa fa-thumb-tack"></i><br>
											Permanent House, Livingstone Road</span>
									</p>
								</div><!-- end card-body-->
								
								<div class="divider"></div>
								
								<div class="card card-icon col-md-4 p-1">
									<div class="card-icon-img fa fa-map-marker text-center p-3"></div>
									<h3 class="card-title text-center">Mazabuka</h3>
									<p class="card-text text-left">
										<span><i class=" fa fa-thumb-tack"></i><br>
											Society House, former Galaba House</span>
									</p>
								</div><!-- end card-body-->
								
								<div class="divider"></div>
								
								<div class="card card-icon col-md-4 p-1">
									<div class="card-icon-img fa fa-map-marker text-center p-3"></div>
									<h3 class="card-title text-center">Livingstone</h3>
									<p class="card-text text-left">
										<span><i class=" fa fa-thumb-tack"></i><br>
											Permanent House, Mosi-o-Tunya Road</span>
									</p>
								</div><!-- end card-body-->
							</div>
							
							<hr>
							
							<div class="row">
								<div class="card card-icon col-md-4">
									<div class="card-icon-img fa fa-map-marker text-center p-3"></div>
									<h3 class="card-title text-center">Lusaka</h3>
									<p class="card-text text-left">
										<span><i class=" fa fa-thumb-tack"></i><br>
											Century House, Cairo Road</span><br>

										<span><i class=" fa fa-thumb-tack"></i><br>
											Permanent House, Cairo Road</span><br>

										<span><i class=" fa fa-thumb-tack"></i><br>
											Chachcha House, Chachacha Road</span>
									</p>
								</div><!-- end card-body-->
								
								<div class="divider"></div>
								
								<div class="card card-icon col-md-4">
									<div class="card-icon-img fa fa-map-marker text-center p-3"></div>
									<h3 class="card-title text-center">Mufulira</h3>
									<p class="card-text text-left">
										<span><i class=" fa fa-thumb-tack"></i><br>
											Security and Nordesia House, Buteko Avenue</span>
									</p>
								</div><!-- end card-body-->
								
								<div class="divider"></div>
								
								<div class="card card-icon col-md-4">
									<div class="card-icon-img fa fa-map-marker text-center p-3"></div>
									<h3 class="card-title text-center">Ndola</h3>
									<p class="card-text text-left">
										<span><i class=" fa fa-thumb-tack"></i><br>
											Nordesia House, Buteko Avenue</span><br>

										<span><i class=" fa fa-thumb-tack"></i><br>
											Bwafwano House, Buteko Avenue</span><br>

										<span><i class=" fa fa-thumb-tack"></i><br>
											Security House, Buteko Avenue</span>
									</p>
								</div><!-- end card-body-->
							</div>
							
							<hr>
							
							<div class="row">
								<div class="card card-icon col-md-4">
									<div class="card-icon-img fa fa-map-marker text-center p-3"></div>
									<h3 class="card-title text-center">Chingola</h3>
									<p class="card-text text-left">
										<span><i class=" fa fa-thumb-tack"></i><br>
											Permanent House, Kitwe/Kwacha Road</span><br>
										
										<span><i class=" fa fa-thumb-tack"></i><br>
											Bwafwano House, Kwacha Road</span>
									</p>
								</div><!-- end card-body-->
								
								<div class="divider"></div>
								
								<div class="card card-icon col-md-4">
									<div class="card-icon-img fa fa-map-marker text-center p-3"></div>
									<h3 class="card-title text-center">Kitwe</h3>
									<p class="card-text text-left">
										<span><i class=" fa fa-thumb-tack"></i><br>
											Permanent House, City Square</span>
									</p>
								</div><!-- end card-body-->
								
								<div class="divider"></div>
								
								<div class="card card-icon col-md-4">
									<div class="card-icon-img fa fa-map-marker text-center p-3"></div>
									<h3 class="card-title text-center">Chililabombwe</h3>
									<p class="card-text text-left">
										<span><i class=" fa fa-thumb-tack"></i><br>
											Permanent House, President Avenue/Penn Brooke Road</span>
									</p>
								</div><!-- end card-body-->
							</div>

						</div><!--end card deck-->
					</div>
					
					<div class="content-panel tab-21-prop-<?php echo $row5['article_id']; ?> animated fadeIn">
					
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify"> <?php echo $content; ?> <br></p><?php if($row5['Document']){
							?> <a   class="section-content-btn" target="_blank" style="animation-delay: 3s" href="Uploads/Document/<?php echo $row5['Document'] ?>">Download</a> <?php }?> </div>
					
					<?php  
					
																} ?>
																
																			
					
				</div><!--end section-content-->
				
				<div class="col-lg-3 col-md-4 section-read-more">

					<ul class="read-more-list">
						<a href="#property"><li class="main-list-tab active" data-list="tab-for-sale">Properties for Sale</li></a>
						<?php 

							$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_category`='6'";
							$q1=mysqli_query($conn,$sql)or die(mysqli_error());
                             $i=0;

							while ($row5 = mysqli_fetch_array($q1)) {

								$i++;
																$title=$row5['At_Title'];
																$content=$row5['At_content'];
																 ?>
						<a href="#property"><li data-list="tab-21-prop-<?php echo $row5['article_id']; ?> "  class="<?php if($i==1) ?>"><?php echo $title; ?></li></a>
						<?php } ?>
						
						
						
					</ul>
				</div><!--end section-content-->
				
				
				<!--mobile list-->
				<div id="accordion">
				  <div class="row">
					   <?php 

							$sql="SELECT * FROM `articles` WHERE `At_category`='6'";
							$q1=mysqli_query($conn,$sql)or die(mysqli_error());


							while ($row5 = mysqli_fetch_array($q1)) {

							$title=$row5['At_Title'];
							$content=$row5['At_content'];
						?>
					  <div class="card" data-toggle="collapse" data-target="#collapseTwelve<?php echo $row5['article_id']; ?>" aria-expanded="true" aria-controls="collapseTwelve">
						<div class="card-header" id="headingTwelve">
						  <h5 class="mb-0">
							<button class="btn btn-link">
							  <?php echo $title; ?>
							</button>
						  </h5>
						</div>
					  </div>
						<div id="collapseTwelve<?php echo $row5['article_id']; ?>" class="collapse" aria-labelledby="headingTwelve" data-parent="#property">
						  <div class="card-body">
						  <?php echo $content; ?>
						  <?php if($row5['Document']){
							?> <a   class="button" target="_blank" style="animation-delay: 3s" href="Uploads/Document/<?php echo $row5['Document'] ?>">Download</a> <?php }?>
							  </div>
						</div>
						  
						<?php } ?>
					
					</div>
				</div><!--end accordion-->
				
			</div>