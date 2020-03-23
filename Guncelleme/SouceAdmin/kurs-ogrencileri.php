<?php include 'header.php';  ?>

<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

       <?php include 'sidebar.php'; ?>

        <div class="content-inner">
           <div class="content chart-cont">  
            <!--***** CONTENT *****-->     
            <div class="row">
              <h3>Öğrenciler | </h3>
                <table class="table table-hover">
                  <thead>
                    <tr class="bg-info text-white">
                      <th>ID</th>
                      <th>Adı Soyadı</th>
                      <th>Telefon</th>
                      <th>Mail Adresi</th>
                      <?php if($yetki != "4") { ?>
                      <th>İşlemler</th>
                    <?php } ?>
                    </tr>
                  </thead>
                  <tbody>

                <?php 
                  $ogrenciler = $db->query("SELECT * FROM users WHERE YETKI='3'", PDO::FETCH_ASSOC);
                    if ( $ogrenciler->rowCount() ){
                      foreach( $ogrenciler as $ogrenci ){
                ?>

                    <tr>
                      <th scope="row"><?php echo $ogrenci["ID"]; ?></th>
                      <td><?php echo $ogrenci["ADSOYAD"]; ?></td>
                      <td><?php echo $ogrenci["TEL"]; ?></td>
                      <td><?php echo $ogrenci["EMAIL"]; ?></td>
                      <?php if ($yetki != "4") {
                        # code...
                     ?>
                      <td>
                        <a href="ogrenci-ekle.php?id=<?php echo $ogrenci["ID"]; ?>"><button class="btn btn-primary btn-sm" type="button">Düzenle</button></a>
                        <a href="#"><button class="btn btn-danger btn-sm" type="button">Sil</button></a>
                      </td>

                    <?php  } ?>
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
    