<?php 

include'../includes/Dbconnect2.php';

					
																	$sql="SELECT `article_id`, `At_Title`, `At_content`, `At_image`, `At_sub_cat`, `At_category`, 
																	`At_status` FROM `articles` WHERE `At_sub_cat`='22' OR `At_sub_cat`='24'";
																	$stmt = $conn2->query($sql);
			
																   
																	while ($row5= $stmt->fetch()) {
																		
																	$title=$row5['At_Title'];
																	 $content=$row5['At_content'];
																
																?>	
		<!--pop-up-window-->
		<div class="modal fade" id="Banking<?php echo $row5['article_id'];?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php echo $title; ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php if($row5['At_image']){?><img class="section-content-img" src='Admin/images/<?php echo $row5['At_image']; ?>'><?php } ?>
						<p class="text-justify"> <?php echo $content; ?> <br></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
																<?php } ?>