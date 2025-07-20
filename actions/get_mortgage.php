<?php
include'../includes/Dbconnect2.php';

 $sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
							`At_status` FROM `articles` WHERE `At_sub_cat`='24'";
							$stmt = $conn2->query($sql);

						while ($row5 = $stmt->fetch()) {

							$title=$row5['At_Title'];
							$content=$row5['At_content']; ?>
							<div class="content-panel tab-6-Mortgage<?php echo $row5['article_id']; ?> animated fadeIn">
				
						<h1 class="display-4 text-center"><?php echo $title; ?></h1>
						<p class="text-justify"><?php echo $content; ?>
						<?php if($row5['At_image']){?><img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'><?php } ?>
						</p></div>
						<?php } ?>