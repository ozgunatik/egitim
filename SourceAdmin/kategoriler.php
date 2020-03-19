<?php include 'header.php';  ?>

<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

       <?php include 'sidebar.php'; ?>

        <div class="content-inner">
           <div class="content chart-cont">  
            <div class="row">
            	<h3>Kategoriler | 
            		<a href="kategori-ekle.php"><button class="btn btn-success btn-sm" type="button">Kategori Ekle</button></a>
            	</h3>
                <table class="table table-hover">
                  <thead>
                    <tr class="bg-info text-white">
                      <th>ID</th>
                      <th>Adı Soyadı</th>
                      <th>Kullanıcı Adı</th>
                      <th>Mail Adresi</th>
                      <th>Kategori</th>
                      <th>İşlemler</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Özgün ATİK</td>
                      <td>@ozgunatik</td>
                      <td>ozgunatik97@gmail.com</td>
                      <td>Yazılım</td>
                      <td>
                      	<a href="#"><button class="btn btn-primary btn-sm" type="button">Düzenle</button></a>
                      	<a href="#"><button class="btn btn-danger btn-sm" type="button">Sil</button></a>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">2</th>
                      <td>Barış BADEMCİ</td>
                      <td>@barisbademci</td>
                      <td>barisbdi@gmail.com</td>
                      <td>Muhasebe</td>
                      <td>
                      	<a href="#"><button class="btn btn-primary btn-sm" type="button">Düzenle</button></a>
                      	<a href="#"><button class="btn btn-danger btn-sm" type="button">Sil</button></a>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">3</th>
                      <td>Hasan BULUT</td>
                      <td>@hasanbulut</td>
                      <td>hasanbulut@gmail.com</td>
                      <td>İşletme</td>
                      <td>
                      	<a href="#"><button class="btn btn-primary btn-sm" type="button">Düzenle</button></a>
                      	<a href="#"><button class="btn btn-danger btn-sm" type="button">Sil</button></a>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">4</th>
                      <td>Ulaş NAYAN</td>
                      <td>@ulasnayan</td>
                      <td>ulasnayan@gmail.com</td>
                      <td>Ekonomi</td>
                      <td>
                      	<a href="#"><button class="btn btn-primary btn-sm" type="button">Düzenle</button></a>
                      	<a href="#"><button class="btn btn-danger btn-sm" type="button">Sil</button></a>
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
    