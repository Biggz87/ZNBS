<?php
include'../includes/trunc.php';
include'../includes/Dbconnect2.php';
 $sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `article_id`='58'";
							$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

							$title=$row5['At_Title'];
							$content=$row5['At_content']; ?>
						
				
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify"><?php echo $shortdesc = myTruncate($content, 500) ?>
					
						<Br><Br><a class="section-content-btn"  data-toggle="modal" data-target="#Banking<?php echo $row5['article_id']; ?>" style="animation-delay: 3s" >More</a>
						<?php if($row5['At_image']){?><img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'><?php } ?>
						</p>
						<?php } ?>