			
																<?php 

					include'../includes/Dbconnect2.php';
																	$sql="SELECT * FROM `articles` WHERE `At_category`='9'";
																	$stmt = $conn2->query($sql);
			
																   
																	while ($row5 = $stmt->fetch()) {
																		
																	$title=$row5['At_Title'];
																	 $content=$row5['At_content'];
																
																?>	
		<!--pop-up-window-->
		<div class="modal fade" id="accounts<?php echo $row5['article_id'];?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1><?php echo $title; ?></h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php if($row5['At_image']){ ?>	<img src="Admin/images/<?php echo $row5['At_image']; ?>"><?php } ?>
					
						<p>
						<?php echo $content; ?>
						<?php if($row5['Document']){ ?>	<a href="Uploads/Document/<?php echo $row5['Document']; ?>"><?php echo $row5['Document'] ?></a><?php } ?>
							</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
																<?php } ?>