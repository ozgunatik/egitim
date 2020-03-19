<?php include 'header.php';  ?>

<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

       <?php include 'sidebar.php'; ?>

       <div class="content-inner chart-cont">

            <!--***** FORM LAYOUTS *****-->     
            <div class="row">
                <div class="col-md-12">

                    <!--***** USER INFO *****-->
                    <div class="card form" id="form1">
                        <div class="card-header">

                            <h3><i class="fa fa-user"></i> Öğrenci Bilgileri</h3>
                        </div>
                        <br>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Ad Soyad</label>
                                        <input type="text" class="form-control" id="name" placeholder="Ad Soyad Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Adresi</label>
                                        <input type="email" class="form-control" id="email"  placeholder="Email Adresi Giriniz">
                                    </div>

                                      <div class="form-group">
                                        <label for="exampleInputFile">Profil Fotoğrafı</label>
                                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                        
                                    </div>
                                   
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="cont-number">Kullanıcı Adı</label>
                                        <input type="text" class="form-control" id="cont-number" placeholder="Kullanıcı Adı Giriniz">
                                    </div> 

                                    <div class="form-group has-success">
                                        <label for="website">Şifre</label>
                                        <input type="password" class="form-control" id="website" placeholder="Şifre Giriniz">
                                    </div>  
                                </div>
                            </div> 
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h3 style="border-bottom: 1px solid #ddd;"> <i class="fa fa-location-arrow"></i> Adres Bilgileri</h3>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="street">Cadde - Sokak - Apartman</label>
                                        <input type="text" class="form-control" id="name" placeholder="Adres Girin">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">İl</label>
                                        <input type="text" class="form-control" id="email" placeholder="İl Giriniz">
                                    </div> 
                                    <div class="form-group">
                                        <label for="post-code">Posta Kodu</label>
                                        <input type="text" class="form-control" id="email" placeholder="Posta Kodu Giriniz">
                                    </div> 
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="state">İlçe</label>
                                        <input type="text" class="form-control" id="cont-number" placeholder="İlçe Giriniz">
                                    </div> 

                                    <div class="form-group">
                                        <label for="exampleSelect1">Ülke </label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option value="">Ülke Seçin</option>
                                            <option value="TR">Türkiye</option>
                                            <option value="BG">Belçika</option>
                                            <option value="HO">Hollanda</option>                                           
                                        </select>
                                    </div>  
                                </div>
                            </div> 
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h3 style="border-bottom: 1px solid #ddd;"> <i class="fa fa-university"></i> Eğitim Bilgileri</h3>
                                </div>
                            </div>
                             <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Üniversite Adı</label>
                                        <input type="text" class="form-control" id="name" placeholder="Üniversite Adı Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="pro-qu">Okuduğunuz Bölüm</label>
                                        <input type="text" class="form-control" id="pro-qu" placeholder="Okuduğunuz Bölümü Giriniz">
                                    </div>
                                </div>
                                <div class="col-md-6">  

                                    <div class="form-group has-success">
                                        <label for="description">Açıklama</label>
                                        <textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea> 
                                        
                                    </div>  
                                </div>
                            </div>  
                           
                            <button type="submit" class="btn btn-general btn-blue mr-2">Kaydet</button>  
                           
                        </form>
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

</html>