<?php
include 'header.php';










?>

<!--***** CONTENT *****-->   
			<div class="container">  
				        <div class="card-header">
                          <br>
                            <h3><i class="fa fa-user-circle"></i> Satın Aldığım Eğitimler</h3>
                        </div>
            <div class="row">
                <table class="table table-hover">
                  <thead>
                    <tr class="bg-info text-white">
                      <th>#</th>
                      <th>Ders Adı</th>
                      <th>Ödenen Ücret</th>
                    </tr>
                  </thead>
                  <tbody>


                     <?php 

           $query4 = $db->query("SELECT * FROM egitimler INNER JOIN kurslar ON egitimler.EGITIM_ID = kurslar.EGITIM_ID WHERE kurslar.OGRENCI_MAIL = '{$email}'", PDO::FETCH_ASSOC);
            if ( $query4->rowCount() ){
              foreach( $query4 as $row ){
            ?>


                    <tr>
                      <th scope="row"><?php echo $row["EGITIM_ID"] ?></th>
                      <td><?php echo $row["BASLIK"];  ?></td>
                      
                     
                      <td><?php echo $row["FIYAT"];  ?> TL</td>
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