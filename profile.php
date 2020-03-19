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
                                <a target="_blank" href="#">Steena Ben</a>
                            </div>
                            <div class="desc">steena@gmail.com</div> 
                            <hr>
                        </div>
                        <nav class="nav text-center prof-nav">
                            <ul  class="list-unstyled ">
                                <li><a href="login.html">Çıkış Yap</a></li> 
                            </ul>
                        </nav>
                        <div class="bottom">
                            <a class="btn btn-info btn-twitter btn-sm" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" rel="publisher"
                               href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a class="btn btn-primary btn-sm" rel="publisher"
                               href="#">
                                <i class="fa fa-facebook"></i>
                            </a> 
                        </div>
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

                              <li class="nav-item">
                                <a class="nav-link" href="#references" role="tab" data-toggle="tab"><span><i class="fa fa-cog"></i></span> Setting</a>
                              </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                              <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec urna aliquam, ornare eros vel, malesuada lorem. Nullam faucibus lorem at eros consectetur lobortis. Maecenas nec nibh congue, placerat sem id, rutrum velit. </p> 
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec urna aliquam, ornare eros vel, malesuada lorem. Nullam faucibus lorem at eros consectetur lobortis. Maecenas nec nibh congue, placerat sem id, rutrum velit. </p>                        
                                    <div class="row mt-3">
                                        <h5 class="col-12 mb-2">User Info</h5>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-envelope"> E-mail: </i></strong>    steena@gmail.com
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-phone"> Phone: </i></strong>   +91 1233 45 5678
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-map"> City: </i></strong>    New York
                                            </div> 
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-globe"> Country: </i></strong>    steena@gmail.com
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-map-marker"> Address: </i></strong>   25, Dist town Street, Logn California
                                            </div>
                                            <div class="form-group">
                                                <strong class="mr-5"><i class="fa fa-map-marker"> Sokak: </i></strong>   sokak
                                            </div> 
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
                                                            <a href="#" class="btn btn-sm btn-hover btn-danger"><span class="fa fa-remove" style="padding-right:3px;"></span></a>
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
                                                            <a href="#" class="btn btn-sm btn-hover btn-danger"><span class="fa fa-remove" style="padding-right:3px;"></span></a>                                                                     
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                        
                                        </div>
                                    </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="references">
                                    <div class="row mx-2">
                                        <div class="col-md-12 panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-comment"></i> Edit Info</h3><br>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group row">
                                                <label for="example-text-input" style="width: 85px;" class=" col-form-label">Name</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="text" value="Steena Ben" id="example-text-input">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-email-input" style="width: 85px;" class=" col-form-label">Email</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="email" value="steena@gmail.com" id="example-email-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" style="width: 85px;" class=" col-form-label">URL</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="url" value="www.Businessbox.com" id="example-url-input">
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="example-date-input" style="width: 85px;" class=" col-form-label">Hire Date</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="date" value="2018-08-19" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" style="width: 85px;" class=" col-form-label">Telephone</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="tel" value="+91-(555)-555-5555" id="example-tel-input">
                                                </div>
                                            </div>
                                            </div>
                                            <a href="#" class="btn w-25 bg-color text-white">Bilgileri Düzenle</a>
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