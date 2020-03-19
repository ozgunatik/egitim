
<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/shop.css">     
    
  </head>

  <body id="page-top">

 <!--***** USER INFO *****-->
 <div class="container">

                <div class="col-md-12">
                    <div class="card form" id="form1">
                        <div class="card-header">
                          <br>
                            <h3><i class="fa fa-user-circle"></i> Kayıt Ol</h3>
                        </div>
                        <form action="nedmin/kayit-islem.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Adı Soyadı</label>
                                        <input type="text" class="form-control" name="username" placeholder="Ad Soyad">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail adresi</label>
                                        <input type="email" class="form-control" name="email"  placeholder="Mail Adresi">
                                    </div>
                                     <div class="form-group">
                                        <label for="email">Şifre</label>
                                        <input type="password" class="form-control" name="password" placeholder="Mail Adresi">
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="cont-number">Telefon Numarası</label>
                                        <input type="text" class="form-control" name="tel" placeholder="Telefon Numarası">
                                    </div> 

                                    <div class="form-group">
                                        <label for="exampleSelect1">Üyelik Türü</label>
                                        <select class="form-control" id="uyelik" name="uyelik">
                                            <option value="">Üyelik Türünü Seçin</option>
                                            <option value="4">Eğitmen</option>
                                            <option value="3">Öğrenci</option>
                                        </select>
                                    </div>

                                     <div class="form-group">
                                        <label for="email">Üniversite</label>
                                        <input type="text" class="form-control" name="university" placeholder="Üniversite">
                                    </div>

                                   
                                </div>
                            </div> 
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h4 style="border-bottom: 1px solid #ddd; padding-bottom: 7px; color:#555;">Adres</h4>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="street">Adres</label>
                                        <input type="text" class="form-control" name="adres" placeholder="Adres">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">İl</label>
                                        <input type="text" class="form-control" name="il" placeholder="İl">
                                    </div> 
                                    <div class="form-group">
                                        <label for="post-code">Posta Kodu</label>
                                        <input type="text" class="form-control" name="postakodu" placeholder="Posta Kodu">
                                    </div> 
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="state">İlçe</label>
                                        <input type="text" class="form-control" name="ilce" placeholder="İlçe">
                                    </div> 

                                    <div class="form-group">
                                        <label for="exampleSelect1">Ülke Seçin</label>
                                        <select class="form-control" name="ulke" id="ulke">
                                            <option value="">Ülke Seç</option>
                                            <option value="TR">Türkiye</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="BY">Belarus</option>
                                          
                                        </select>
                                    </div>  
                                    <div>

                        			</div>
                                </div>
                            </div>
                            <div>
                               <label class="form-control-label" for="inputSuccess1">Kendinizden Bahsedin</label>
                            	<small class="form-text text-muted"></small>
                                <div class="form-group has-warning">
                            <textarea class="form-control" name="aciklama" rows="3"></textarea>
                        </div>
                              <div class="col-md-12 eigth-button mt-5">
                                  
                                  <button type="submit" name="kayitol" class="btn btn-23">Kayıt Ol</button>
                              </div>
                        </form>
                    </div>
                </div>    
            </div> 

        </div>
    </div> 
</div> 
<!--Global Javascript -->
    <script src="js/adm/jquery.min.js"></script>
    <script src="js/adm/popper/popper.min.js"></script>
    <script src="js/adm/tether.min.js"></script>
    <script src="js/adm/bootstrap.min.js"></script>
    <script src="js/adm/jquery.cookie.js"></script>
    <script src="js/adm/jquery.validate.min.js"></script> 
    <script src="js/adm/chart.min.js"></script> 
    <script src="js/adm/front.js"></script> 
    
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