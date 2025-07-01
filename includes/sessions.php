<?php
session_start();
error_reporting(0);
$_SESSION[]= array();
include 'Dbconnect.php';
$dbuser=$_SESSION['username'];
$dblevel=$_SESSION['level'];
$lock_screen=$_SESSION['lockapp'];
	
$semail="";
$firstname="";
$lastname="";
$credit_limit="";
$cif_id='';
$todayDate=date('Y-m-d');
$profilePic="";

date_default_timezone_set("Africa/Harare");
 $todayDate=date('Y-m-d');

   $query="SELECT * FROM `user_tbl` INNER JOIN `employees_tbl` ON `employees_tbl`.`emp_id`=`user_tbl`.`Staff_no` WHERE `username`='$dbuser'";
      
      $q1=mysqli_query($conn,$query)or die(mysqli_error());
        
        
            while ($row = mysqli_fetch_array($q1)) {
            $profilePic=$row['Picture'];
            $firstname=$row['first_name'];
           $lastname=$row['last_name'];
            $semail = $row['email'];
           
			$dblevel =$row['level'];
			
            }




?> 