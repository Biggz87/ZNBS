			<div class="row">
				<div class="col-lg-3 section-img"></div>
				
				<div class="col-lg-6 col-md-8 section-content">
					
					
					<?php 

						$sql="SELECT * FROM `articles` WHERE `At_category`='6'";
						$stmt = $conn2->query($sql);
											$stmt->execute();
											$i=0;
											while( $row5 = $stmt->fetch()){

						$title=$row5['At_Title'];
						$content=$row5['At_content'];
					?>
					<div class="content-panel tab-21-prop-<?php echo $row5['article_id']; ?> animated fadeIn">
					
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify"> <?php echo $content; ?> <br></p><?php if($row5['Document']){
							?> <a   class="section-content-btn" target="_blank" style="animation-delay: 3s" href="Uploads/Document/<?php echo $row5['Document'] ?>">Download</a> <?php }?> </div>
					
					<?php  
					
																} ?>
					<div class="content-panel tab-for-sale animated fadeIn">
						<h1 class="display-4 text-center">Properties for Sale</h1>
						<hr>
						<div id="propertysel" class="row">
								
								

							
						</div><!--end row-->
					</div>
																
																			
					
				</div><!--end section-content-->
				
				<div class="col-lg-3 col-md-4 section-read-more">

					<ul class="read-more-list">
						
						<?php 

							$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_category`='6'";
							$stmt = $conn2->query($sql);
											$stmt->execute();
											$i=0;
											while( $row5 = $stmt->fetch()){

								$i++;
																$title=$row5['At_Title'];
																$content=$row5['At_content'];
																 ?>
						<a href="#property"><li data-list="tab-21-prop-<?php echo $row5['article_id']; ?> "  class="<?php if($i==1){echo 'active'; } ?>"><?php   echo $title;  ?></li></a>
						<?php } ?>
						
						<a href="#property" onclick="getProperty()"><li class="main-list-tab " data-list="tab-for-sale">Properties for Sale</li></a>
						
					</ul>
				</div><!--end section-content-->
				
				
				<!--mobile list-->
				
				
			</div>