	                    
						
						<h1 class="display-4 text-center">History</h1>
						<hr>
						<p class="text-justify">		
						<?php
                      include'../includes/Dbconnect2.php';						
								$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
								`At_status` FROM `articles` WHERE `At_sub_cat`='30'";
								$stmt = $conn2->query($sql);

                             $count=0;
						while ($row5 = $stmt->fetch()) {

								$title=$row5['At_Title'];
								echo $content=$row5['At_content'];
								?>
								
								
						</p>			
						</p>
							<?php if($row5['At_image']){ ?>	<img class="section-content-img" src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
							
								<?php } ?>	
						
						<p class="text-justify">
						<?php 
								$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
								`At_status` FROM `articles` WHERE `At_sub_cat`='18'";
								$stmt = $conn2->query($sql);

                             $count=0;
						while ($row5 = $stmt->fetch()) {

							$title=$row5['At_Title'];
								echo $content=$row5['At_content'];
								?>
								
								<?php if($row5['At_image']){ ?>	<img src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
								<?php } ?>	
						</p>