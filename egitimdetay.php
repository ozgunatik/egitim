<?php
include 'header.php';
$gelenVeri = $_GET['egid'];

$query2 = $db->query("SELECT * FROM egitimler WHERE ID='{$gelenVeri}'")->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="css/single-product.css">
    
  </head>

  <body id="page-top">

<!--====================================================
                  SINGLE-PRODUCT-P1
======================================================--> 
    <section id="single-product-p1">
      <div class="container">  
            <div class="wrapper row">
              <div class="preview col-md-6">
                
                <div class="preview-pic tab-content">
                  <div class="tab-pane active" id="pic-1"><img width="500" height="500" src="nedmin/<?php echo $query2["LOGO"]; ?>" /></div>
                  <div class="tab-pane" id="pic-2"><img src="img/shop/shop-item-3.jpg" /></div>
                  <div class="tab-pane" id="pic-3"><img src="img/shop/shop-item-4.jpg" /></div>
                  <div class="tab-pane" id="pic-4"><img src="img/shop/shop-item-5.jpg" /></div>
                  <div class="tab-pane" id="pic-5"><img src="img/shop/shop-item-2.jpg" /></div>
                </div>


              </div>
              <div class="details col-md-6">
                <div class="prenom" style="font-size: 50px;"><?php echo $query2["BASLIK"]; ?></div>
                <div class="rating">
                  <div class="stars">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>

                    <!--
                    <strong> ONAYLI PROFİL VE DİPLOMA <i class="far fa-check-circle" alt="" style=" color: var(--green)"></i></strong>
                    --> 

                  </div>
                </div>
                <p class="product-description"><?php echo $query2["ACIKLAMA"]; ?></p>

                <h5 class="sizes">Kategori =
                  <span title="small"><?php echo $query2["KATEGORI"]; ?></span>
                </h5>
                <h4 class="price"> Ücret: <span><?php echo $query2["FIYAT"]; ?> TL</span> </h4>
                <div class="action">
                <div class="title-but">
                  
                  <a href="nedmin/kurs-kayit.php?gelen=<?php echo $gelenVeri; ?>&user=<?php echo $email; ?>"> <button class="btn w-25 bg-color text-white" role="button"></i> EĞİTİME KATIL</button></a>
                </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="service-h-tab"> 
                  <nav class="nav nav-tabs" id="myTab" role="tablist">
                    <!--<a class="btn w-25 bg-color text-white" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Yorumlar</a>-->
                    <a class="btn w-25 bg-color text-white"  id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Detaylar</a> 
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                   <!-- <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> 
                      <div class="review-block">
                        <div class="row">
                          <div class=" col-sm-3">
                            <img src="img/client/avatar-3.jpg" class="img-rounded">
                            <div class="review-block-name"><a href="#">Nktailor</a></div>
                          </div>
                          <div class="col-sm-9">
                            <div class="rating">
                              <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div> 
                          </div>
                        </div> 
                      </div> 
                      <div class="review-block">
                        <div class="row">
                          <div class="col-sm-3">
                            <img src="img/client/avatar-1.jpg" class="img-rounded">
                            <div class="review-block-name"><a href="#">Nktailor</a></div>
                          </div>
                          <div class="col-sm-9">
                            <div class="rating">
                              <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div> 
                          </div>
                        </div> 
                      </div> 
                      <div class="review-block">
                        <div class="row">
                          <div class="col-sm-3">
                            <img src="img/client/avatar-2.jpg" class="img-rounded"> 
                            <div class="review-block-name"><a href="#">Nktailor</a></div>
                          </div>
                          <div class="col-sm-9">
                            <div class="rating">
                              <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                              </div>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div> 
                          </div>
                        </div> 
                      </div> 
                    </div>-->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <p><?php echo $query2["ACIKLAMA"]; ?></p>
                    </div>  
                  </div>
                </div>
            </div> 
      </div>
    </section>
      <br>
     <!--====================================================
                      BUSINESS-GROWTH-P1
======================================================-->
    <section id="business-growth-p1" class="business-growth-p1 bg-gray">
      <div class="container">
        <div class="row title-bar">
          <div class="col-md-12">
        </div>
        <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="col-md-3 col-sm-6 service-padding">
              <div class="service-item">
                  <div class="service-item-icon"> <i class="fa fa-paint-brush fa-3x"></i>
                  </div>
                  <div class="service-item-title">
                      <h3>Üye Ol</h3>
                  </div>
                  <div class="service-item-desc">
                      <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p> 
                      <div class="content-title-underline-light"></div> 
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 service-padding">
              <div class="service-item">
                  <div class="service-item-icon"> <i class="fa fa-laptop fa-3x"></i>
                  </div>
                  <div class="service-item-title">
                      <h3>Eğitim Ara</h3>
                  </div>
                  <div class="service-item-desc">
                      <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                      <div class="content-title-underline-light"></div> 
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 service-padding">
              <div class="service-item">
                  <div class="service-item-icon"> <i class="fa fa-table fa-3x"></i>
                  </div>
                  <div class="service-item-title">
                      <h3>Eğitime Katıl</h3>
                  </div>
                  <div class="service-item-desc">
                      <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                      <div class="content-title-underline-light"></div> 
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 service-padding">
              <div class="service-item right-bord">
                  <div class="service-item-icon"> <i class="fa fa-search fa-3x"></i>
                  </div>
                  <div class="service-item-title">
                      <h3>Yorum Yap</h3>
                  </div>
                  <div class="service-item-desc">
                      <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                      <div class="content-title-underline-light"></div> 
                  </div>
              </div>
          </div> 
        </div>
      </div>  
    </section>   








<!--====================================================
                        SHOP-P1
======================================================--> 
    <section id="shop-p1" class="shop-p1" style="padding-top:0px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="shop-p1-title">  
              <h3>Diğer Eğitimler</h3>
              <br>
              <div class="heading-border-light"></div> 
            </div>  
          </div> 
          <div class="col-lg-12"> 
            <div class="row" style="padding: 0px">

               <?php 
                    $digerEgitimler = $db->query("SELECT * FROM egitimler ORDER BY EGITIM_ID DESC LIMIT 4", PDO::FETCH_ASSOC);
                      if ( $digerEgitimler->rowCount() ){
                        foreach( $digerEgitimler as $egitimler ){
                  ?>


              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card ">
                  <a href="#"><img class="card-img-top" width="300" height="250" src="<?php echo $egitimler["LOGO"]; ?>" alt="" style=" border-radius: 25px; "></a>
                  <div class="card-body text-center">
                    <div class="card-title">
                      <a href="#"><?php echo $egitimler["BASLIK"]; ?></a>
                    </div>
                    <strong><?php echo $egitimler["FIYAT"]; ?> TL</strong>
                    <div class="cart-icon text-center">
                      <a href="egitimdetay.php?egid=<?php echo $egitimler["EGITIM_ID"]; ?>"><i class="fas fa-align-center"></i> Hemen İncele</a>
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
  </body>
  </html>

<?php
include 'footer.php';
?>