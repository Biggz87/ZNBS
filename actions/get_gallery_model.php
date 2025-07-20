<?php  
include'../includes/Dbconnect2.php';
include '../includes/gallery.php';		
							 		$downloadSQL="SELECT * FROM `property`";
									$stmt = $conn2->query($downloadSQL);
									$count=0;
									while($row5 = $stmt->fetch()){
									$count++; 
									
								?>
		<div class="modal fade" id="gallery-modal_<?php echo $row5['prop_id']; ?>" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h1> Property Images</h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
						<div class="row">
							<?php echo getpics($row5['prop_id']); ?>
							
						</div><!--end row-->
						
					
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div><!--end modal-->
									<?php   }
								?>