<?php
include '../../includes/Dbconnect.php';
include '../../includes/passwordLib.php';
include'../../includes/Dbconnect.php';

session_start();
$user=$_POST['username'];
$pass=$_POST['password'];
//$user="mweemba";
//$pass="Gifted@2020";
// $ewncryptedpass=crypt($pass);
 
 if($user){
    
    if($pass){
       
	// $qr="SELECT * FROM `user_tbl` WHERE `username`='$user'";
		
       
		$stmt = $conn->prepare("SELECT username,password,level,active  FROM `user_tbl` WHERE `username`=?");
		$stmt->bind_param("s",$user);
		$stmt->execute();
		$stmt->bind_result($username,$password,$level,$active);
		
        if ($row=$stmt->fetch()){
            
 
           $dbuser=$username;
            $dbpass = $password;
            $dblevel=$level;
			$dbactive=$active;
            
            if(password_verify($pass ,$dbpass )){
			  
                if($dbactive==1){
                    if($dblevel==1){
                      
                        $_SESSION['username']=$dbuser;
                        $_SESSION['level']=$dblevel;
						$_SESSION['lockapp']='';
                       	
                   echo 'success';
                    }
                    elseif($dblevel==2){
                      
                        $_SESSION['username']=$dbuser;
                        $_SESSION['level']=$dblevel;
						$_SESSION['lockapp']='';
                       							
					echo 'success';  
                  }
              
                    }
                    else
                
                echo "you must activate your account to login.  <a href='VerifyAccount.php' >Click Here</a> to Activate";
                
                }else
            
            echo "The user username or  password is not correct";
            }else
            
            echo "The user username or  password is not correct";
            
               }else
    
    echo "you need to enter a password..";
       
       
       
       
    }else
       echo "you did not enter a username..";
 
 
 //}
 
  
      

?>   