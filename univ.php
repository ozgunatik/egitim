<?php
include 'header.php';

$gelenVeri = $_GET["kategori"];



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
                        SHOP-P1
======================================================--> 
    <section id="shop-p1" class="shop-p1">
      <div class="container">
        <div class="row">
          <div class="col-lg-9"> 
            <div class="row">
             
              <?php 
                  $kategoriler = $db->query("SELECT * FROM egitimler WHERE KATEGORI = '{$gelenVeri}'", PDO::FETCH_ASSOC);
                    if ( $kategoriler->rowCount() ){
                      foreach( $kategoriler as $kategori ){
                ?>
                      
                
              
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" src="<?php echo $kategori["LOGO"] ?>" alt=""></a>
                  <div class="card-body text-center">
                    <div class="card-title">
                      <h5><?php echo $kategori["BASLIK"] ?></h5>
                    </div>
                    <strong><?php echo $kategori["FIYAT"] ?> TL</strong>
                    <div class="cart-icon text-center">
                      <a href="egitimdetay.php?egid=<?php echo $kategori["EGITIM_ID"]; ?>"><i class="fas fa-align-center"></i> Hemen İncele</a>
                    </div>
                  </div>
                </div>
              </div>   

            <?php } } ?>


            </div>
          </div> 
        </div> 
      </div>
    </section>


<?php
include 'footer.php';
?>