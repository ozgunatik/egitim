<?php include 'header.php'; 

if (isset($_GET["id"])) {
   
   $query1 = $db->query("SELECT * FROM USERS WHERE ID='{$_GET["id"]}'")->fetch(PDO::FETCH_ASSOC);

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

                            <h3><i class="fa fa-graduation-cap"></i> Eğitmen Bilgileri</h3>
                        </div>
                        <br>
                        <form action="../nedmin/egitmenguncelle.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Ad Soyad</label>
                                         <input type="hidden" class="form-control" name="id" value="<?php echo $query1["ID"]; ?>">
                                        <input type="text" class="form-control" name="adsoyad" value="<?php 
                                            if (isset($_GET["id"])) {
   
                                            echo $query1["ADSOYAD"];

                                                } ?>" placeholder="Ad Soyad Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Adresi</label>
                                        <input type="email" class="form-control" name="email" value="<?php 
                                            if (isset($_GET["id"])) {
   
                                            echo $query1["EMAIL"];

                                                } ?>"  placeholder="Email Adresi Giriniz">
                                    </div>

                                     
                                   
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="cont-number">Şifre</label>
                                        <input type="text" class="form-control" name="sifre" value="<?php 
                                            if (isset($_GET["id"])) {
   
                                            echo "**********";

                                                } ?>" placeholder="Kullanıcı Adı Giriniz">
                                    </div> 

                                    <div class="form-group has-success">
                                        <label for="website">Telefon</label>
                                        <input type="text" class="form-control" name="tel" value="<?php 
                                            if (isset($_GET["id"])) {
   
                                            echo $query1["TEL"];

                                                } ?>" placeholder="Şifre Giriniz">
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
                                        <input type="text" class="form-control" name="adres" value="<?php 
                                            if (isset($_GET["id"])) {
   
                                            echo $query1["ADRES"];

                                                } ?>" placeholder="Adres Girin">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">İl</label>
                                        <input type="text" class="form-control" name="il" value="<?php 
                                            if (isset($_GET["id"])) {
   
                                            echo $query1["IL"];

                                                } ?>" placeholder="İl Giriniz">
                                    </div> 
                                    <div class="form-group">
                                        <label for="post-code">Posta Kodu</label>
                                        <input type="text" class="form-control" name="postakodu" value="<?php 
                                            if (isset($_GET["id"])) {
   
                                            echo $query1["POSTAKODU"];

                                                } ?>" placeholder="Posta Kodu Giriniz">
                                    </div>  
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="state">İlçe</label>
                                        <input type="text" class="form-control" name="ilce" value="<?php 
                                            if (isset($_GET["id"])) {
   
                                            echo $query1["ILCE"];

                                                } ?>" placeholder="İlçe Giriniz">
                                    </div> 

                                    <div class="form-group">
                                        <label for="exampleSelect1">Ülke </label>
                                        <select class="form-control" id="ulke">
                                            <option value="<?php 
                                            if (isset($_GET["id"])) {
   
                                            echo $query1["ULKE"];

                                                } ?>">Türkiye</option>
                                                <option>Belçika</option>
                                                                                     
                                        </select>
                                    </div>  
                                </div>
                            </div> 
                           
                            
                           
                            
                            <?php 

                            if (isset($_GET["id"])) {
   ?>
  <button type="submit" name="egitmenguncelle" class="btn btn-general btn-blue mr-2">Güncelle</button>  

                          <?php } else {  ?>  

<button type="submit" class="btn btn-general btn-blue mr-2">Kaydet</button>  

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