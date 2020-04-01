<?php

include("ddconnection.php");
session_start();

//if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myemail = mysqli_real_escape_string($conn, $_POST['email']);
   $mypassword = mysqli_real_escape_string($conn, $_POST['password']); 

  // echo "Email: ".$myemail."<br/>";
  // echo "Email: ".$mypassword."<br/>";
   
  if($conn)
  {
    $sql = "SELECT id FROM supermarket_detail WHERE email = '".$myemail."' and password = '".$mypassword."'";
    $result = mysqli_query($conn, $sql);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
 
   // echo $count;
    
    // If result matched $myemail and $mypassword, table row must be 1 row
      
    if($count == 1) {
       
       $_SESSION["login_user"] =  $myemail;
       header("Location:supermarket_update.php");
    }else {
       echo "Your Login Name or Password is invalid";
    } 
  }
  else
  {
      echo "Not connected!";
  }
//}

?>