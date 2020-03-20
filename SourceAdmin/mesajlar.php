<?php include 'header.php';  





?>



<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

       <?php include 'sidebar.php'; ?>

        <div class="content-inner">
           <div class="content chart-cont">  
            <div class="row">
               <h3>Mesajlar | <small><a href="mesaj-olustur.php"><button class="btn btn-success">Yeni Mesaj</button></a></small></h3>
                <table class="table table-hover">
                   <thead>
                    <tr class="bg-info text-white">
                      <th>#</th>
                      <th>Kimden</th>
                      <th>Başlık</th>
                      <th>Mesaj</th>
                      <th>İşlem</th>
                    </tr>
                  </thead>
                  <tbody>

                      <?php 

           $query4 = $db->query("SELECT * FROM mesajlar WHERE ALICI_MAIL='{$email}'", PDO::FETCH_ASSOC);
            if ( $query4->rowCount() ){
              foreach( $query4 as $row ){
            ?>


                    <tr>
                      <th scope="row"><?php echo $row["ID"] ?></th>
                      <td><?php echo $row["GONDEREN_MAIL"];  ?></td>
                      
                     
                      <td><?php echo $row["BASLIK"];  ?></td>
                      <td><?php echo $row["MESAJ"];  ?></td>
                      <td><button><a href="mesaj-olustur.php?gonderen=<?php echo $row["GONDEREN_MAIL"]; ?>">Cevapla</a></button></td>
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
    