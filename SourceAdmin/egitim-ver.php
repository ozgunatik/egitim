<?php include 'header.php'; 

$email="";

if (isset($_SESSION['email'])) {
        $email = $_SESSION["email"];
        $yetki1 = $db->query("SELECT * FROM users WHERE EMAIL='{$email}'")->fetch(PDO::FETCH_ASSOC);
        
}

   
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

                            <h3>Eğitmen Bilgileri</h3>
                        </div>
                        <br>
                        <form  enctype="multipart/form-data" action="../nedmin/egitim-ekle.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Eğitmen No</label>
                                        <input type="text" class="form-control" readonly="" name="egitmenid" value="<?php 
                                            
   
                                            echo $yetki1["ID"];

                                                 ?>" placeholder="Ad Soyad Giriniz">
                                    </div>
                                    

                                     
                                   
                                </div>
                                <div class="col-md-6"> 
                                   <div class="form-group">
                                        <label for="text">Ad Soyad</label>
                                        <input type="text" class="form-control" readonly="" name="email" value="<?php 
                                          
   
                                            echo $yetki1["ADSOYAD"];

                                               ?>"  placeholder="Email Adresi Giriniz">
                                    </div>

                                   
                                </div>
                            </div> 
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h3 style="border-bottom: 1px solid #ddd;"> Eğitim Bilgileri</h3>
                                </div>
                            </div>
                            <div class="row mt-4">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Başlık</label>
                                        <input type="text" class="form-control" name="baslik">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Kategori</label>
                                        <input type="text" class="form-control" name="kategori">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Detay</label>
                                        <input type="text" class="form-control" name="detay">
                                    </div>

                                     
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Açıklama</label>
                                        <input type="text" class="form-control" name="aciklama">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Fiyat</label>
                                        <input type="text" class="form-control" name="fiyat">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Logo</label>
                                        <input type="file" class="form-control-file" name="dosya">
                                       
                                    </div>
                                     
                                   
                                </div>
                            </div> 



                            
                            
                           
                            
                            <?php 

                            if (isset($_GET["id"])) {
   ?>
  <button type="submit" name="egitimver" class="btn btn-general btn-blue mr-2">Güncelle</button>  

                          <?php } else {  ?>  

<button type="submit" name="egitimver" class="btn btn-general btn-blue mr-2">Güncelle</button>  

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