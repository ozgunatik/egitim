<?php include 'header.php';  ?>


<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

       <?php include 'sidebar.php'; ?>

        <div class="content-inner">

            <!--***** REPORT-1 *****-->     
            <div class="row" id="report1">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <?php echo $count; ?></h2>
                                <span class="text-muted"> Kayıtlı Eğitmen</span>
                            </div>                         
                        </div>
                    </div>
                </div> 
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $count1; ?></h2>
                                <span class="text-muted">Kayıtlı Öğrenci</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block"> 
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="fa fa-list-alt" aria-hidden="true"></i> <?php echo $count2; ?></h2>
                                <span class="text-muted">Kayıtlı Kategori </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block"> 
                            <div class="text-left report1-cont">
                                <h2 class="font-light m-b-0"><i class="fa fa-play" aria-hidden="true"></i> <?php echo $count3; ?></h2>
                                <span class="text-muted">Kayıtlı Eğitim</span>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
 
           
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



     <?php include 'footer.php'; ?>

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
    