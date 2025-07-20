<?php
function getpics($propert_id){
	
	include 'Dbconnect.php';
$count=1;				
 $propertySQL="SELECT * FROM `properties_imagess` WHERE `prop_id`='$propert_id'";
											$results=mysqli_query($conn,$propertySQL);
											
											while( $row5=mysqli_fetch_array($results)){
											 
        
	?>
	
	<a class="example-image-link thumbnail col-md-4" href="Admin/images/<?php echo $row5['name'] ?>" data-lightbox="property-1" data-title=""><img class="example-image" src="Admin/images/<?php echo $row5['name'] ?>" alt=""/></a>
	<?php
											}
	
}


?>