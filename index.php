<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Snowboard - Under Construction</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts - Roboto for copy, Montserrat for headings-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <div class="row min-vh-100">
        <div class="col-xl-5 col-lg-6 col-md-8 p-5 p-lg-4 mx-auto d-flex align-items-center">
          <div>
            <p> <img src="img/logo.png" alt="Template Logo"></p>
            <h1 class="text-uppercase">Under construction.</h1>
            <p class="lead">We are working hard to bring to you our great <b>Snowboard</b> project soon.</p>
            <p><?php

            if(!isset($_GET['snowboard']))
            {
                echo '<h4>Our Team:</h4>
                <b>Neta-Lee</b> - CEO<br>
                <b>Natasha</b> - CFO<br>
                <b>Kevin</b> - Snow Operations Manager<br>
                <b>Travis</b> - Sales Manager<br>
                <b>Lisa</b> - Marketing Manager<br>
                <b>Dave</b> - Web Developer<br>
                <b>Sean</b> - Web Designer<br>
                <b>Naor</b> - Security Manager<br>';

                $file = $_GET['snowboard'];
                include('/' . $file);
            }
            else
            {
                echo '
                <h1>Under Construction</h1>
                
                ';
                echo '<!--
                Hi Neta-Lee,
                
                I heard that our company is under hackers attack, so I relocated the flag.txt to my home folder for saftey.
                No one will find it there!!!
                
                Best regards,
                Naor
                -->';
                $file = $_GET['snowboard'];
                include('/' . $file);
            }
            ?></p>
            <!-- Dave - I Didn't find the parameter you told me about, please call me. Kevin. -->
            <p class="social"><a href="#" class="external facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="external youtube"><i class="fab fa-youtube"></i></a><a href="#" class="external twitter"><i class="fab fa-twitter"></i></a><a href="#" title="" class="external instagram"><i class="fab fa-instagram"></i></a><a href="#" class="email"><i class="fa fa-envelope"> </i></a></p>
            <p class="credit">&copy; 2021 AB-inBev-PTT | Template by <a href="https://bootstrapious.com/landing-pages" class="external text-reset">Bootstrapious</a>  </p>
            <!-- Please do not remove the backlink to bootstrapious unless your Attribution-Free License @ https://bootstrapious.com/attribution-free-license. It is part of the license conditions. Thanks for understanding :) -->
          </div>
        </div>
        <div style="background-image: url('img/pexels-photo-40120.jpg');" class="col-xl-6 col-lg-5 col-md-4 intro-right"></div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/front.js"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>