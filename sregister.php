
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
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Adı Soyadı</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail adresi</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" required>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Üye Olarak Şartlar ve Koşulları Kabul Etmiş Sayılırsınız</span>
                                        </label> 
                                    </div>
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="cont-number">Telefon Numarası</label>
                                        <input type="email" class="form-control" id="cont-number" aria-describedby="emailHelp" placeholder="Enter Number">
                                    </div> 

                                    <div class="form-group">
                                        <label for="exampleSelect1">Üyelik Türü</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option value="">Üyelik Türü</option>
                                            <option value="AR">Eğitmen</option>
                                            <option value="AU">Öğrenci</option>
                                        </select>
                                    </div>  
                                </div>
                            </div> 
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h4 style="border-bottom: 1px solid #ddd; padding-bottom: 7px; color:#555;">Address</h4>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="street">Cadde</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Street Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">Şehir</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter City">
                                    </div> 
                                    <div class="form-group">
                                        <label for="post-code">Posta Kodu</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Post Code">
                                    </div> 
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="state">Sokak</label>
                                        <input type="email" class="form-control" id="cont-number" aria-describedby="emailHelp" placeholder="Enter State">
                                    </div> 

                                    <div class="form-group">
                                        <label for="exampleSelect1">Ülke Seçin</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option value="">Select Your Country</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BR">Brazil</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="CA">Canada</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CO">Colombia</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EG">Egypt</option>
                                            <option value="EE">Estonia</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="HK">Hong Kong S.A.R., China</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MT">Malta</option>
                                            <option value="MX">Mexico</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MA">Morocco</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="KP">North Korea</option>
                                            <option value="NO">Norway</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PS">Palestinian Territory</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="KR">South Korea</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">USA</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VN">Vietnam</option>
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
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                              <div class="col-md-12 eigth-button mt-5">
                                  
                                  <a href="https://twitter.com/Dave_Conner" class="btn btn-23">Kayıt Ol</a>
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