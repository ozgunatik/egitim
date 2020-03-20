<?php include 'header.php'; 


   
   $query1 = $db->query("SELECT * FROM site_ayar WHERE ID=1")->fetch(PDO::FETCH_ASSOC);



 ?>

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

                            <h3>Header Ayarları [Üst Menü]</h3>
                        </div>
                        <br>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Logo</label>
                                        <input type="text" class="form-control" name="name" value="<?php 
                                            
   
                                            echo $query1["LOGO"];

                                                 ?>" placeholder="Ad Soyad Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">ACIKLAMA</label>
                                        <input type="email" class="form-control" name="email" value="<?php 
                                          
   
                                            echo $query1["ACIKLAMA"];

                                               ?>"  placeholder="Email Adresi Giriniz">
                                    </div>

                                     
                                   
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="cont-number">Başlık</label>
                                        <input type="text" class="form-control" name="username" value="<?php 
                                         
   
                                            echo $query1["BASLIK"];

                                                 ?>" placeholder="Kullanıcı Adı Giriniz">
                                    </div> 

                                   
                                </div>
                            </div> 
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h3 style="border-bottom: 1px solid #ddd;"> Footer Ayarları [Alt Menü]</h3>
                                </div>
                            </div>
                            <div class="row mt-4">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Adres Başlık 1</label>
                                        <input type="text" class="form-control" name="name" value="<?php 
                                            
   
                                            echo $query1["ILET_BASLIK1"];

                                                 ?>" placeholder="Ad Soyad Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Adres Başlık 2</label>
                                        <input type="email" class="form-control" name="email" value="<?php 
                                          
   
                                            echo $query1["ILET_BASLIK2"];

                                               ?>"  placeholder="Email Adresi Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Adres Başlık 3</label>
                                        <input type="email" class="form-control" name="email" value="<?php 
                                          
   
                                            echo $query1["ILET_BASLIK3"];

                                               ?>"  placeholder="Email Adresi Giriniz">
                                    </div>

                                     
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Adres Tel 1</label>
                                        <input type="text" class="form-control" name="name" value="<?php 
                                            
   
                                            echo $query1["ILET_TEL1"];

                                                 ?>" placeholder="Ad Soyad Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Adres Tel 2</label>
                                        <input type="email" class="form-control" name="email" value="<?php 
                                          
   
                                            echo $query1["ILET_TEL2"];

                                               ?>"  placeholder="Email Adresi Giriniz">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Adres Tel 3</label>
                                        <input type="email" class="form-control" name="email" value="<?php 
                                          
   
                                            echo $query1["ILET_TEL3"];

                                               ?>"  placeholder="Email Adresi Giriniz">
                                    </div>
                                     
                                   
                                </div>
                            </div> 



                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h3 style="border-bottom: 1px solid #ddd;">Sosyal Hesaplar</h3>
                                </div>
                            </div>
                             <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">LinkedIn</label>
                                        <input type="text" class="form-control" name="universite" value="<?php 
                                           
   
                                            echo $query1["LINKEDIN"];

                                                ?>" placeholder="Üniversite Adı Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="pro-qu">Twitter</label>
                                        <input type="text" class="form-control" value="<?php 
                                            
   
                                            echo $query1["TWITTER"];

                                                 ?>" placeholder="Okuduğunuz Bölümü Giriniz">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Facebook</label>
                                        <input type="text" class="form-control" name="universite" value="<?php 
                                            
   
                                            echo $query1["FACEBOOK"];

                                                 ?>" placeholder="Üniversite Adı Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="pro-qu">Instagram</label>
                                        <input type="text" class="form-control" value="<?php 
                                           
   
                                            echo $query1["INSTAGRAM"];

                                                ?>" placeholder="Okuduğunuz Bölümü Giriniz">
                                    </div>
                                </div>
                            </div>  
                           
                            
                            <?php 

                            if (isset($_GET["id"])) {
   ?>
  <button type="submit" class="btn btn-general btn-blue mr-2">Güncelle</button>  

                          <?php } else {  ?>  

<button type="submit" class="btn btn-general btn-blue mr-2">Güncelle</button>  

<?php } ?>
                           
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