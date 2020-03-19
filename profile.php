<?php
include 'header.php';
?>

<!DOCTYPE html>

  <head>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-icon-style.css">

    
    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="css/profile.css"> 
    
  </head>

  <body id="page-top">


<div class="container">
            <!--***** CONTENT *****-->     
                            <div class="row mt-2" id="card-prof">
                <div class="col-md-3">
                    <div class="card hovercard">
                        <div class="cardheader"></div>
                        <div class="avatar">
                            <img alt="" src="img/avatar-1.jpg" class="img-fluid">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a><?php echo $query1["ADSOYAD"]; ?></a>
                            </div>
                            <div class="desc"><?php echo $query1["EMAIL"]; ?></div> 
                            <hr>
                        </div>
                        <nav class="nav text-center prof-nav">
                            <ul  class="list-unstyled ">
                                <li><a href="logout.php">Çıkış Yap</a></li> 
                            </ul>
                        </nav>
                        
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card hovercard">
                        <div class="tab" role="tabpanel"> 
                            <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item ">
                                <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><span><i class="fa fa-user"></i></span> Profile</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><span><i class="fa fa-inbox"></i></span> Inbox</a>
                              </li>

                             
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                              <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                    <?php echo $query1["ACIKLAMA"]; ?>                      
                                    <div class="row mt-3">
                                        <h5 class="col-12 mb-2">Kullanıcı Bilgileri</h5>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-envelope"> E-mail : </i></strong><?php echo $query1["EMAIL"]; ?>
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-phone"> Telefon : </i></strong><?php echo $query1["TEL"]; ?>
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-map"> İl : </i></strong><?php echo $query1["IL"]; ?></div> 
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-globe"> Ülke : </i></strong><?php echo $query1["ULKE"]; ?></div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-map-marker"> Adres : </i></strong><?php echo $query1["ADRES"]; ?></div>
                                            
                                        </div>
                                    </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="buzz">
                                    <div class="panel panel-default widget">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-comment"></i> Messages</h3>
                                            
                                        </div>
                                        <div class="panel-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/avatar-2.jpg" class="img-circle img-fluid" alt="" /></div>
                                                        <div class=" col-md-10">
                                                            <div>
                                                                <a href="#">
                                                                    Mesaj Başlığı</a>
                                                                <div class="mic-info">
                                                                    By: <a href="#">Üye Adı Soyadı</a> 
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                Mesaj İçeriği
                                                            </div>
                                                            <a  href="#" class="btn btn-sm btn-hover btn-primary" href="#reply" ><span class="fa fa-comments" style="padding-right:3px;"></span></a>
                                                           
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/avatar-3.jpg" class="img-circle img-fluid" alt="" /></div>
                                                        <div class=" col-md-10">
                                                            <div>
                                                                <a href="#">
                                                                    Mesaj Başlığı
                                                                </a>
                                                                <div class="mic-info">
                                                                    By: <a href="#">Üye Adı Soyadı</a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                Mesaj içeriği
                                                            </div>
                                                            <a  href="#" class="btn btn-sm btn-hover btn-primary" href="#reply" ><span class="fa fa-comments" style="padding-right:3px;"></span></a>
                                                                                                                                
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                        
                                        </div>
                                    </div>
                              </div>
                             
                                    </div> 
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

        </div>
    </div> 
                
</div>
    <!--Global Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.validate.min.js"></script> 
    <script src="js/chart.min.js"></script> 
    <script src="js/front.js"></script> 
    
    <!--Core Javascript -->
    <script>
        new Chart(document.getElementById("myChart-nav").getContext('2d'), {
          type: 'doughnut',
          data: {
            labels: ["M", "T", "W", "T", "F", "S", "S"],
            datasets: [{
              backgroundColor: [
                "#2ecc71",
                "#3498db",
                "#95a5a6",
                "#9b59b6",
                "#f1c40f",
                "#e74c3c",
                "#34495e"
              ],
              data: [12, 19, 3, 17, 28, 24, 7]
            }]
          },
          options: {
              legend: { display: false },
              title: {
                display: true,
                text: ''
               } 
            }
        });
    </script> 
</body>














<?php
include 'footer.php';
?>