
 <!--***** SIDE NAVBAR *****-->
        <nav class="side-navbar">
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4"><?php echo $query3["ADSOYAD"]; ?></h1>
                </div>
            </div>
            <hr>

            <?php if ($yetki == "5") 

            {
                 
              ?>
            <!--***** ADMIN SIDEBAR *****-->
            <span class="heading">Admin Panel</span>
            <ul class="list-unstyled">
                <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Anasayfa</a></li>
                <li><a href="egitmenler.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Eğitmen Yönetimi </a></li>
                <li><a href="egitimler.php"><i class="fa fa-play" aria-hidden="true"></i>Eğitim Yönetimi </a></li>
                <li><a href="ogrenciler.php"><i class="fa fa-users" aria-hidden="true"></i>Öğrenci Yönetimi </a></li>
                <!--<li><a href="kategoriler.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Eğitim Kategorileri </a></li>-->
                <li><a href="mesajlar.php"><i class="fa fa-comments-o" aria-hidden="true"></i>Mesajlar </a></li>
                 <li><a href="sayfalar.php"><i class="fa fa-file" aria-hidden="true"></i>Sayfalar </a></li>
                <li><a href="#apps" aria-expanded="false" data-toggle="collapse"><i class="fa fa-cog" aria-hidden="true"></i>Site Yönetimi </a>
                    <ul id="apps" class="collapse list-unstyled">
                        <li><a href="calendar.html">Genel Ayarlar</a></li> 
                        <li><a href="email.html">Footer Ayaları</a></li> 
                    </ul>
                </li>
              </ul>  
               <span class="heading">EKSTRA</span>
                <ul class="list-unstyled"> 
                 <li><a href="#forms" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-edit"></i>Geliştirici Elementleri </a>
                    <ul id="forms" class="collapse list-unstyled">
                        <li><a href="basic-form.html">Yapılacak</a></li> 
                        <li><a href="form-layouts.html">Yapılacak</a></li> 
                    </ul>
                </li>
                <li><a href="chart.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Güvenli Çıkış </a></li>
            </ul>                                                                                                               
              

               <?php } elseif ($yetki == "4") {
              # code...
           ?>
            <!--***** EGITMEN SIDEBAR *****-->
            <span class="heading">Eğitmen Panel</span>
            <ul class="list-unstyled">
                <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Anasayfa</a></li>
                <li><a href="egitmenler.php"><i class="fa fa-address-book" aria-hidden="true"></i> Profilim</a></li>
                <li><a href="egitimler.php"><i class="fa fa-play" aria-hidden="true"></i> Kurslarım</a></li>
                <li><a href="ogrenciler.php"><i class="fa fa-users" aria-hidden="true"></i> Öğrenciler</a></li>
                <li><a href="mesajlar.php"><i class="fa fa-comments-o" aria-hidden="true"></i> Mesajlar</a></li>  
                <li><a href="chart.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Güvenli Çıkış </a></li>               
              </ul>

          <?php } ?>


        </nav>