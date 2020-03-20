<?php
include 'header.php';







?>

<!--***** CONTENT *****-->   
      <div class="container">  
                <div class="card-header">
                          <br>
                            <h3><i class="fa fa-envelope"></i> Mesajlar | <small><a href="mesaj-olustur.php"><button class="btn btn-success">Yeni Mesaj</button></a></small></h3>
                        </div>
            <div class="row">
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








    <?php
include 'footer.php';
?>