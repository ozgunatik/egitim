<?php 

include 'nedmin/baglan.php';
ini_set('mssql.charset', 'UTF-8');

ob_start();
session_start();

$yetki="0";
$email="";

if (isset($_SESSION['yetki'])) {
	 $yetki = $_SESSION["yetki"];
}

if (isset($_SESSION['email'])) {
	$email = $_SESSION['email'];
}

$query = $db->query("SELECT * FROM SITE_AYAR")->fetch(PDO::FETCH_ASSOC);
$query1 = $db->query("SELECT * FROM USERS WHERE EMAIL='{$email}'")->fetch(PDO::FETCH_ASSOC);




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/aos.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.js"></script>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-md navbar-light bg-white">
	  <a class="navbar-brand" href="index.php"><img src="<?php echo $query['LOGO']; ?>"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	     
	      
	      <li class="nav-item ml-md-3">
	        <a class="nav-link" href="egitimler.php">Eğitimler</a>
	      </li>

	    

	      <?php if ($yetki == "3") 

            {
                 
              ?>
              

	        <li class="nav-item ml-md-3"></li>
	       <a class="nav-link" href="derslerim.php">Kurslarım</a>
	        <li class="nav-item ml-md-3"></li>
	       <a class="nav-link" href="profile.php">Profilim </a>
	         <li class="nav-item border ml-md-3" style="border: 0.5px solid #F6F6F6 !important;"></li>
	         <li class="nav-item ml-md-3"></li>
	       <a class="nav-link" href="logout.php">Çıkış Yap</a>


	   <?php } elseif ($yetki != "3") { ?>

	   	  <li class="nav-item ml-md-3"></li>
	       <a class="nav-link" href="login.php">Eğitim Al</a>
	       <li class="nav-item ml-md-3"></li>
	       <a class="nav-link" href="egitimver.php">Eğitim Ver</a>
	        <li class="nav-item ml-md-3"></li>
 			<li class="nav-item active">
	        <a class="nav-link" href="register.php">Kaydol</a>
	      </li>
	       <li class="nav-item ml-md-3">
	        <a class="nav-link" href="login.php">Giriş</a>
	      </li>

	  
	 <?php  } ?>



	    



               
	        </a>
	      </li>
	    </ul>
	  </div>
	</nav>
</div>