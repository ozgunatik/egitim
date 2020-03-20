<?php
include 'header.php';






?>

<!--***** CONTENT *****-->   
      <div class="container">  
                 <section class="shop-form bg-gray" id="shop-form">
      <div class="container">
        <div class="row"> 
          <div class="col-md-10 main-login main-center">
            <form  method="POST" action="nedmin/mesaj-yolla.php">
              

              <div class="form-group">
                <label for="email" class="cols-sm-4 control-label">Kime</label>
                <div class="cols-sm-12">
                  <div class="input-group">                  
                    <input type="email" class="form-control" name="kime" value="<?php 

                    if (isset($_GET["gonderen"])) {

                      echo $_GET["gonderen"];
    
                    }


                     ?>" placeholder="Kime"/>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Konu</label>
                <div class="cols-sm-10">
                  <div class="input-group">                  
                    <input type="text" class="form-control" name="konu"  placeholder="Konu"/>
                  </div>
                </div>
              </div>

              <div class="form-group">
               <label for="exampleFormControlTextarea1">Mesaj</label>
               <textarea class="form-control" name="mesaj" rows="3"></textarea>
              </div>


              <div class="form-group ">
               <button type="submit" name="mesajyolla" class="btn btn-success">Gönder</button>
              </div> 
            </form>
          </div>
        </div>
      </div>
    </section>
           
            </div> 

        </div>
    </div> 








    <?php
include 'footer.php';
?>