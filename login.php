<?php
include 'header.php';
?>

<!DOCTYPE html>

  <head>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="css/shop.css"> 
    
  </head>

  <body id="page-top">
<!--====================================================
                        FORM
======================================================-->
    <section class="shop-form bg-gray" id="shop-form">
      <div class="container">
        <div class="row"> 
          <div class="col-md-10 main-login main-center">
            <form class="form-horizontal" method="POST" action="nedmin/islem.php">
              

              <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                <div class="cols-sm-10">
                  <div class="input-group">                  
                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Password</label>
                <div class="cols-sm-10">
                  <div class="input-group">                  
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                  </div>
                </div>
              </div>


              <div class="form-group ">
               <button type="submit" name="uyelik" class="btn btn-success">Login</button>
              </div> 
            </form>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>