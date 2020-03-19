<?php include 'header.php';  ?>

<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

       <?php include 'sidebar.php'; ?>

        <div class="content-inner">
           <div class="content chart-cont">  
            <div class="row">
            	<h3>Sayfalar | 
            		<a href="ogrenci-ekle.php"></a>
            	</h3>
                <table class="table table-hover">
                  <thead>
                    <tr class="bg-info text-white">
                      <th>ID</th>
                      <th>Sayfa Adı</th>                   
                      <th width="200">İşlemler</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <th scope="row">1</th>
                      <td>Hakkımızda</td>                                     
                      <td>
                      	<a href="#"><button class="btn btn-primary btn-sm" type="button">Düzenle</button></a>                      	
                      </td>
                    </tr>
                    

                    <tr>
                      <th scope="row">2</th>
                      <td>İletişim</td>                                      
                      <td>
                      	<a href="#"><button class="btn btn-primary btn-sm" type="button">Düzenle</button></a>
                      </td>
                    </tr>

                   <tr>
                      <th scope="row">3</th>
                      <td>Eğitimlerimiz</td>                                       
                      <td>
                      	<a href="#"><button class="btn btn-primary btn-sm" type="button">Düzenle</button></a>
                      </td>
                    </tr>

                   
                 
                   
                  </tbody>
                </table>
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
    <script src="js/mychart.js"></script>
</body>

</html>
    