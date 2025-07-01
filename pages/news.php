		<div class="news-bg"></div>
			<div class="news-gird">
				<h1 class="text-center display-4">News</h1>

				<div class="container">
				


					<div id="testimonial-slider" class="owl-carousel owl-theme">
						<?php 
							include 'includes/trunc.php';
							$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_sub_cat`='17'";
							$q1=mysqli_query($conn,$sql)or die(mysqli_error());


							while ($row5 = mysqli_fetch_array($q1)) {

							$title=$row5['At_Title'];
							 $content=$row5['At_content'];

						?>	
					
						
						<div class="testimonial">
							<h5><?php echo $title; ?></h5>
							<img style="height:250px" src="Admin/images/<?php echo $row5['At_image']; ?>">
							<p class="description">
							<?php 
							
							echo $shortdesc = myTruncate($content, 120);;

							?>
									</p>
							<div class="testimonial-content">
								<a data-toggle="modal" data-target="#news<?php echo $row5['article_id']; ?>"><div class="pic align-items-center"><p>Read More</p></div></a>
							</div>
						</div>

							
							
						<?php } ?>	
							</div>
				
				</div>

							
			</div><!--end about-gird-->