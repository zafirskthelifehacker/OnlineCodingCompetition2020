<?php
	include("ddconnection.php");
	$conn = mysqli_connect($servername, $username, $password,$db);
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password_confirm=$_POST['password-repeat'];
	$policy=$_POST['policy'];
	if (!$conn) {
		echo'<script>alert("Server error")</script>';
	}
	else{
		
		if(isset($email)&&isset($password)&&isset($password_confirm)){
			
			if(isset($policy)){
				
				if($password!=$password_confirm){
					echo'PASSWORD NOT SAME!!!';
				}else{
				
					header('Location:supermarket_add.php?email='.$email.'&password='.$password);
					
				}
			}else{
				echo'POLICY NOT CHECKED!!!';
			}
		}else{
			echo'EMPTY FIELDS!!!';
		}
		
		

	}

?>