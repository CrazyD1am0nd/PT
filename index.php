<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gif Displayer</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <!--<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Create your profile</a>
      <a class="btn btn-primary" href="#">Sign In</a>
    </div>
  </nav>
-->

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-10 mx-auto">
          <h1 class=00"mb-5">Choose your favorite animal and prepare to be amazed!</h1>
        </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters align-items-center">
      <div class="col-lg-3"></div>
        <div class="col-lg-6 col-12 my-auto showcase-text">        
          <form class="col-lg-12 mb-6" action="">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
          
                  <select class="form-control" id="pic" name="pic">
                  <option disabled selected value> -- Choose your favorite animal -- </option>
                    <option value="https://media.giphy.com/media/8lHaXDdlmmXvivQhjx/giphy.gif">Dog</option>
                    <option value="https://media.giphy.com/media/DohrzSCB07moM/giphy.gif">Monkey</option>
                    <option value="https://media.giphy.com/media/14uXQbPS73Y3qU/giphy.gif">Hamster</option>
                    <option value="https://media.giphy.com/media/L9AqjFr6H4iaY/giphy.gif">Pig</option>
                    <option value="https://media.giphy.com/media/SK4EWuN6eLRCg/giphy.gif">Lizard</option>
                    <option value="https://media.giphy.com/media/xThuWcH0xUi4HASiHu/giphy.gif">Cat</option>
                    <option value="https://media.giphy.com/media/XCsuZw0hWj8B2/giphy.gif">Bear</option>
                    <option value="https://media.giphy.com/media/12L6wFC7gHKQ92/giphy.gif">Panda</option>
                                        
                  </select>
            
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-primary">Show me!</button>
              </div>
            </div>
          </form>
        <div class="col-lg-12 ">
        <?php
function endswith($string, $test) {
    $strlen = strlen($string);
    $testlen = strlen($test);
    if ($testlen > $strlen) return false;
    return substr_compare($string, $test, $strlen - $testlen, $testlen) === 0;
}
if (isset($_REQUEST['pic'])) {
    $pic = $_REQUEST['pic'];
    if (strpos($pic, 'http') === 0 && endswith($pic, '.gif')) {
        if (!@preg_match('/\&|\;|\|\|/', $pic)) {
            ?>
            <img class="col-lg-12 order-lg-2 text-white showcase-img" src='<?php echo $pic;?>'>
            <div class="col-lg-12 order-lg-2"><?php 
            $file_path = tempnam("/tmp", "ctf_"); ;
            $cmd = 'curl ' . $pic . ' -o ' . $file_path . ';';
            system($cmd);
            //system('md5sum ' . $file_path . "| cut -d' ' -f1");
            system('rm -f ' . $file_path);
            ?></div>
            <?php
            //$command = 'wget ' . $pic;
            //system($command);
            ///// echo the md5
            ///// echo an iframe to the site
            
        }
        else { //HAS SPACE
        ?>
            <div class="col-lg-12 order-lg-2 text-danger">some special characters in the url are not allowed</div>
        <?php
        }
    }
    else { //NOT A PNG OR NOT A HTTP
    ?>
            <div class="col-lg-12 order-lg-2 text-danger">not a valid gif or http url</div>
        <?php
    }
}
else { //PIC PARAMETER NOT PROVIDED
?>
            <!--<div class="col-lg-12 order-lg-2 text-danger">pic parameter is missing</div>-->
        <?php
}
?>
            </div>
        </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>