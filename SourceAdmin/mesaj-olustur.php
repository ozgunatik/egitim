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

                            <h3> Mesaj Oluştur</h3>
                        </div>
                        <br>
                        <form method="POST" action="../nedmin/mesaj-yolla.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Kime</label>
                                        <input type="email" class="form-control" name="kime" value="<?php 

                    if (isset($_GET["gonderen"])) {

                      echo $_GET["gonderen"];
    
                    }


                     ?>" placeholder="Ad Soyad Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Konu</label>
                                        <input type="text" class="form-control" name="konu" value="<?php 
                                            if (isset($_GET["id"])) {
   
                                            echo $query1["EMAIL"];

                                                } ?>"  placeholder="Konu">
                                    </div>

                                     
                                   
                                </div>
                               
                            </div> 
                           
                            
                            
                             <div class="row mt-4">
                                
                                <div class="col-md-12">  

                                    <div class="form-group has-success">
                                        <label for="description">Mesaj</label>
                                        <textarea  class="form-control" name="mesaj"  cols="30" rows="5"></textarea> 
                                        
                                    </div>  
                                </div>
                            </div>  
                           
                            
                            <?php 

                            if (isset($_GET["id"])) {
   ?>
  <button type="submit" class="btn btn-general btn-blue mr-2">Güncelle</button>  

                          <?php } else {  ?>  

<button type="submit" name="mesajyolla" class="btn btn-general btn-blue mr-2">Gönder</button>  

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