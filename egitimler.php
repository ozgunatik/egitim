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
                          SHOP-P1
  ======================================================--> 
      <section id="shop-p1" class="shop-p1">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="shop-p1-title"> 
                <h3>Kategoriler</h3> <br>
                  <div class="heading-border-light"></div> 
              </div>
              <div class="list-group">
                <?php 
                  $kategoriler = $db->query("SELECT KATEGORI FROM egitimler GROUP BY KATEGORI", PDO::FETCH_ASSOC);
                    if ( $kategoriler->rowCount() ){
                      foreach( $kategoriler as $kategori ){
                ?>
                        <a href="univ.php?kategori=<?php echo $kategori["KATEGORI"] ?>" class="list-group-item"><?php echo $kategori["KATEGORI"]; ?></a>
                
                <?php } } ?>
              </div><br>
              <div class="shop-p1-title">  
                <h3>En Popüler</h3>
                <br>
                <div class="heading-border-light"></div> 
              </div>
                <ul class="list-unstyled top-seller">
                  <?php 
                    $populerKurslar = $db->query("SELECT * FROM egitimler LIMIT 3", PDO::FETCH_ASSOC);
                      if ( $populerKurslar->rowCount() ){
                        foreach( $populerKurslar as $kurslar ){
                  ?>

                  <li>
                    <img class="img-fluid" src="nedmin/<?php echo $kurslar["LOGO"]; ?>" alt="">
                    <h6><?php echo $kurslar["BASLIK"]; ?></h6>
                    <p><?php echo $kurslar["FIYAT"]; ?> TL</p>
                  </li>             
              

            <?php } } ?>
            </ul> 

            </div> 
      <div class="col-lg-9"> 
        <div class="row">
           <?php 

           $query1 = $db->query("SELECT * FROM egitimler", PDO::FETCH_ASSOC);
            if ( $query1->rowCount() ){
              foreach( $query1 as $row ){
            ?>


           
              
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card ">
                    <a href="#"><img class="card-img-top" width="250" height="250" src="nedmin/<?php echo $row["LOGO"]; ?>" alt=""></a>
                    <div class="card-body text-center">
                      <div class="card-title">
                        <a href="#"><?php echo $row["BASLIK"]; ?></a>
                      </div>
                      <strong><?php echo $row["FIYAT"]; ?> TL</strong>
                      <div class="cart-icon text-center">
                        <a href="egitimdetay.php?egid=<?php echo $row["EGITIM_ID"]; ?>"><i class="fas fa-align-center"></i> Hemen İncele</a>
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