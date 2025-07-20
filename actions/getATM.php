	<?php //$dbuser='mweemba';
		//	$dbuser=$_POST['user'];
		
		include'../includes/Dbconnect2.php';	
 $id=$_POST['id'];
		
	
	$query2="SELECT `Id`, `city`, `Loacation_coodinates`, `place_location` FROM `atms` WHERE `Id`=:id";
$stmt = $conn2->prepare($query2);
								
								 $stmt->bindParam("id",$id);
							
											$stmt->execute();
										
											
											while( $row = $stmt->fetch()){
				
				  
						
						echo $value=$row['Loacation_coodinates'];
						//echo htmlspecialchars($value);
						 
					}
			
			?>