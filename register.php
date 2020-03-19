<?php
include 'header.php';
?>

<!DOCTYPE html>

  <head>

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/careers.css">
    
  </head>

  <body id="page-top">

  	<div class="container">
      <!--====================================================
                       CAREER-P3
======================================================--> 
    <div class="overlay-career-p3"></div>
     <section id="career-p3">
         <div class="row career-p3-title">
          <div class="col-md-12">
           <h3 class="text-center">Üyelik Türü</h3>
          </div> 
         </div>
         <div class="row">
           <div class="col-md-3 col-sm-6">
             <div class="career-p3-cont text-center">
               <i class="fas fa-user-check"></i>
				<a href="sregister.php">Eğitmen</a>
             </div>
           </div>
           <div class="col-md-3 col-sm-6">
             <div class="career-p3-cont text-center">
               <i class="fas fa-list-alt"></i>
               <a href="sregister.php">Öğrenci</a>
             </div>
           </div>
           <div class="col-md-3 col-sm-6">
             <div class="career-p3-cont text-center">
               <i class="far fa-hand-pointer"></i>
               <a href="help.php">Yardım</a>
             </div>
           </div>
           <div class="col-md-3 col-sm-6">
             <div class="career-p3-cont text-center">
               <i class="far fa-hand-pointer"></i>
               <a href="contact.php">İletişim</a>
             </div>
           </div>           
         </div>
       </div>
     </section> 
     </div>

         <!--Global JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/wow/wow.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script> 
    <script src="js/custom.js"></script>
    <script>
        if( jQuery(".toggle .toggle-title").hasClass('active') ){
                jQuery(".toggle .toggle-title.active").closest('.toggle').find('.toggle-inner').show();
            }
            jQuery(".toggle .toggle-title").click(function(){
                if( jQuery(this).hasClass('active') ){
                    jQuery(this).removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
                }
                else{   jQuery(this).addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);
                }
            });
    </script> 
  </body>

<?php
include 'footer.php';
?>