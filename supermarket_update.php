<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="background-color: #bc2e57;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">SafeShopping</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler float-right" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="log_out.php">SIGN OUT</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="contact-clean">
        <?php
        if(isset($_GET['update'])){
            echo "<script>alert('UPDATED!!!');</script>";
        }
session_start();
$email=$_SESSION["login_user"];


$servername = "3.82.104.189";
$username = "admin";
$password = "29282625";

$db="safeshopping";
$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){
echo'<script>alert("error")</script>';
}else{
    $sql="select name,area,opening_time,closing_time,address,email,time_per_person from supermarket_detail where email='".$email."'";
    $result= mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo'
        <form method="post" action="update_supermarket.php">
            <h2 class="text-center">SUPERMARKET DETAILS</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" value='.$row['name'].' required></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email" value='.$row['email'].' required></div>
            <div class="form-group"><input class="form-control is-invalid" type="text" name="address" placeholder="Address" value='.$row['address'].' ></div>
            <p>Retail Space Area</p>
            <div class="form-group"><input class="form-control is-invalid" type="text" name="Retail_space_area" placeholder="Retail Space Area(PER METRE SQUARE)" value='
            .$row['area'].' required></div>
            <p>Opening Time</p>
            <div class="form-group"><input class="form-control" type="time" name="time_start" value='.$row['opening_time'].' required></div>
            <p>Closing Time</p>
            <div class="form-group"><input class="form-control" type="time" name="time_end" value='.$row['closing_time'].' required></div>
            <div class="form-group"><input class="form-control is-invalid" type="text" name="average_time_per_customer" placeholder="Average Time Per Customer" value='.$row['time_per_person'].'></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">UPDATE DETAILS</button></div>
        </form>';
        break;
    }
    
}


        
        
        ?>
    </div>
    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2><span></span><span>#StaySafe</span></h2>
            <ul class="list-inline list-social">
                <li class="list-inline-item social-twitter"><a href="https://twitter.com/WHOSouthAfrica"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item social-facebook"><a href="https://www.who.int/"><i class="fa fa-globe"></i></a></li>
                <li class="list-inline-item social-google-plus"></li>
            </ul>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>©&nbsp;SafeShopping 2020. All Rights Reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">FAQ</a></li>
            </ul>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>