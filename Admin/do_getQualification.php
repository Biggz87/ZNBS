<?php 
include'../includes/Dbconnect.php';
$DetailID=$_POST['detailID'];
                        
 $propertySQL="SELECT `Qualif_id`, `qualification`, `Vacancy_id` FROM `vacancy_qualification` WHERE `Qualif_id`='$DetailID'";
											$results=mysqli_query($conn,$propertySQL);
											
											while($row5=mysqli_fetch_array($results)){
												echo $row5['qualification'];
												
											}
											 
            ?>

