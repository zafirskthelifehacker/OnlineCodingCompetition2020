<?php
    include("ddconnection.php");
?>

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
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">HOME PAGE</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="features-boxed" style="padding: 50px;">
        <div class="container">
            <div class="text-center intro">
                <h2 class="text-center">AVAILABLE TIME SLOTS</h2>
            </div>
            <div class="row justify-content-center features">
                <?php
                    if($conn)
                    {
                        $supermarket_name = $_GET['ref'];
                        $sql = "SELECT id, time_in, time_out FROM code WHERE supermarket_name = '".$supermarket_name."'";
                        $result = mysqli_query($conn, $sql);
                    
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result))
                            {
                ?>
                                <div class="col-sm-6 col-md-5 col-lg-4 item">
                                    <div class="box">
                                        <h3 class="name"><?php echo($row["time_in"]); ?> - <?php echo($row["time_out"]); ?></h3>
                                        <h3 class="name"><?php echo($row["id"]); ?></h3>

                                        <?php

                                            $rowID=$row["id"];
                                            
                                            $sql_select = "SELECT active FROM code WHERE id = '".$rowID."'";

                                            $result_select = mysqli_query($conn, $sql_select);

                                           // echo $rowID;

                                            if (mysqli_num_rows($result_select) > 0) {

                                                while($row = mysqli_fetch_assoc($result_select)) {

                                                    $current_active = $row["active"];

                                                    if($current_active == 1)
                                                    {
                                                ?>
                                            
                                                        <a class="btn btn-primary btn-block" type="submit" href=<?php echo('"/customer_confirm.php?ref='.$rowID.'"'); ?>  style="background-color: #bc2e57;">BOOK</a>
                                        

                                                  <?php      
                                                    }

                                                    else
                                                    {
                                                        ?>
                                                        <button class="btn btn-primary btn-block" type="submit" style="background-color: #fdcc52;">BOOKED</button>
                                                        <?php
                                                    }

                                                }
                                            }
                                        
                                        ?>
                                    </div>
                                </div>
                <?php
                            }
                        } else {

                             echo "0 results";
                        }

                        mysqli_close($conn);
                    }
                    else{

                        echo "DB Connection failed!!";
                    }
                ?>
            </div>
        </div>
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
                <li class="list-inline-item"></li>
                <li class="list-inline-item"></li>
            </ul>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>