
								<?php 
						//types of accounts
					include'../includes/Dbconnect2.php';
					
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