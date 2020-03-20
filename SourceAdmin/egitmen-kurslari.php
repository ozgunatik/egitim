<?php include 'header.php';  


$query5 = $db->query("SELECT ID FROM users WHERE EMAIL='{$email}'")->fetch(PDO::FETCH_ASSOC);


?>



<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

       <?php include 'sidebar.php'; ?>

        <div class="content-inner">
           <div class="content chart-cont">  
            <div class="row">
            	<h3>Eğitimler | 
            		<!--<a href="egitim-ekle.php"><button class="btn btn-success btn-sm" type="button">Eğitim Ekle</button></a>-->
            	</h3>
                <table class="table table-hover">
                  <thead>
                    <tr class="bg-info text-white">
                      <th>ID</th>
                      <th>Başlık</th>
                      <th>Açıklama</th>
                      <th>Kategori</th>
                      <th>Fiyat</th>
                      <th>İşlemler</th>
                    </tr>
                  </thead>
                  <tbody>

                     <?php 
                  $egitimler = $db->query("SELECT * FROM egitimler WHERE EGITMEN_ID='{$query5["ID"]}'", PDO::FETCH_ASSOC);
                    if ( $egitimler->rowCount() ){
                      foreach( $egitimler as $egitim ){
                ?>


                    <tr>
                      <th scope="row"><?php echo $egitim["ID"]; ?></th>
                      <td><?php echo $egitim["BASLIK"]; ?></td>
                      <td><?php echo substr($egitim["ACIKLAMA"], 0,70); ?>...</td>
                      <td><?php echo $egitim["KATEGORI"]; ?></td>
                      <td><?php echo $egitim["FIYAT"]; ?> TL</td>
                      <td>
                      	<a href="#"><button class="btn btn-primary btn-sm" type="button">Düzenle</button></a>
                      	<a href="#"><button class="btn btn-danger btn-sm" type="button">Sil</button></a>
                      </td>
                    </tr>

                  <?php } } ?>

                   

                   

                
                 
                   
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
    