<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password1=$_POST['password'];
    $address=$_POST['address'];
    $area=$_POST['Retail_space_area'];
    $time_start=$_POST['time_start'];
    $time_end=$_POST['time_end'];
    $time_per_person=$_POST['average_time_per_customer'];


    include("ddconnection.php");
        
    // Check connection
    if (!$conn) {
        echo'<script>alert("Server error")</script>';
    }
    else{

        $sql= "insert into supermarket_detail(name,password,area,opening_time,closing_time,address,email,time_per_person) values('".$name."','".$password1."',".$area.",'".$time_start.
        "','".$time_end."','".$address."','".$email."','".$time_per_person."')";

        $result= mysqli_query($conn, $sql);
        
        if(isset($result)){
            header('Location:login.php');
        } else{
            echo'ERROR SENDING INFO TO DATADASE> TRY AGAIN!!!';
        }
    }

?>