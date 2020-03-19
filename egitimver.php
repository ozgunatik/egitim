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



<!--***** FORM VALIDATION *****-->
                    <div class="container">
                        
                    <div class="card form" id="form3">
                        <div class="mt-2 mb-4">
                            <br>
                            <h4 style="border-bottom:1px solid #ddd; padding-bottom: 10px;">Eğitim Detayları</h4>
                        </div>
                        <div class="form-group has-success">
                            <label class="form-control-label" for="inputSuccess1">Eğitim Başlığı</label>
                            <input type="text" class="form-control is-valid" id="inputSuccess1">
                            <br>
                            <label class="form-control-label" for="inputSuccess1">Eğitim Kısa Açıklama</label>
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group has-warning">
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div> 
                       
                        <br>
                        <div class="form-group">
                                        <label for="exampleSelect1">Eğitim Bölgesi</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option value="">Select Your City</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                        </select>
                        
                        </div>
                        <div class="form-group">
                                        <label for="exampleSelect1">Üniversite</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option value="">Select Your University</option>
                                            <option value="AR">A</option>
                                            <option value="AU">B</option>
                                            <option value="AT">C</option>
                                            <option value="BY">D</option>
                                            <option value="BE">E</option>
                                        </select>
                        
                        </div>
                               <div class="form-group">
                                        <label for="exampleSelect1">Eğitim Kategorisi</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option value="">Select Your Category</option>
                                            <option value="AR">A</option>
                                            <option value="AU">B</option>
                                            <option value="AT">C</option>
                                            <option value="BY">D</option>
                                            <option value="BE">E</option>
                                        </select>
                        </div>                 
                    </div>

                                                    <div>
                               <label class="form-control-label" for="inputSuccess1">Eğitim Detayları</label>
                                <small class="form-text text-muted"></small>
                                <div class="form-group has-warning">
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            </div>
                                                    <div class="form-group has-success">
                            <label class="form-control-label" for="inputSuccess1">Eğitim Ücreti (Sadece Rakam Yazınız)</label>
                            <input type="text" class="form-control is-valid" id="inputSuccess1">
                        </div>
                        <div 
                            class="title-but"><button class="btn w-25 bg-color text-white" role="button"></i> EĞİTİMİ YAYINLA</button>
                        </div>
                        </div>
                            <!-- GÖNDERDİKTEN SONRA PROFİL SAYFASINA YÖNLENSİN -->


<?php
include 'footer.php';
?>