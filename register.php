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
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <?php
            echo'
            <form method="post" action="sign_up.php">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" required></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" name="policy">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #bc2e57;">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a>
            </form>';
            ?>
        </div>
    </div>
    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2><span>#StaySafe</span></h2>
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
            </ul>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>