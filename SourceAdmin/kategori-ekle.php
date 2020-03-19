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

                            <h3><i class="fa fa-list-alt"></i> Kategori Bilgileri</h3>
                        </div>
                        <br>
                        <form>
                            
                            
                           
                              <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Kategori Adı</label>
                                        <input type="text" class="form-control" id="name" placeholder="Kategori Adı Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label for="pro-qu">Özel Kod 1</label>
                                        <input type="text" class="form-control" id="pro-qu" placeholder="Özel Kod 1 Giriniz">
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