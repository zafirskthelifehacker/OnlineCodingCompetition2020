<?php
	session_start();
	$email=$_SESSION['login_user'];


	$servername = "3.82.104.189";
	$username = "admin";
	$password = "29282625";

	$db="safeshopping";
	$conn = mysqli_connect($servername, $username, $password,$db);

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password1=$_POST['password'];
	$address=$_POST['address'];
	$area=$_POST['Retail_space_area'];
	$time_start=$_POST['time_start'];
	$time_end=$_POST['time_end'];
	$time_per_person=$_POST['average_time_per_customer'];
	if(!$conn){
		echo'<script>alert("connection error")</script>';
		
	}else{
	$sql="update supermarket_detail set name= '".$name."' where email='".$email."'";
	$result= mysqli_query($conn, $sql);


	$sql1="update supermarket_detail set address= '".$address."' where email='".$email."'";
	$result1= mysqli_query($conn, $sql1);


	$sql2="update supermarket_detail set opening_time= '".$time_start."' where email='".$email."'";
	$result2= mysqli_query($conn, $sql2);

	$sql3="update supermarket_detail set closing_time= '".$time_end."' where email='".$email."'";
	$result3= mysqli_query($conn, $sql3);


	$sql4="update supermarket_detail set time_per_person= '".$time_per_person."' where email='".$email."'";
	$result4= mysqli_query($conn, $sql4);

	$sql5="update supermarket_detail set email= '".$email."' where email='".$email."'";
	$result5= mysqli_query($conn, $sql5);
	header('Location:supermarket_update.php?update=success');
	
}

	

?>