<?php

include '../nedmin/baglan.php';
ini_set('mssql.charset', 'UTF-8');

ob_start();
session_start();

$yetki="0";
$email="";

if (isset($_SESSION['yetki'])) {
     $yetki = $_SESSION["yetki"];
}

if (isset($_SESSION['email'])) {
    $email = $_SESSION["email"];
    $query3 = $db->query("SELECT * FROM users WHERE EMAIL='{$email}'")->fetch(PDO::FETCH_ASSOC);

}

$del = $db->prepare('SELECT * FROM users WHERE YETKI="4"');
$del->execute();
$count = $del->rowCount();

$del1 = $db->prepare('SELECT * FROM users WHERE YETKI="3"');
$del1->execute();
$count1 = $del1->rowCount();

$del2 = $db->prepare('SELECT KATEGORI FROM egitimler GROUP BY KATEGORI');
$del2->execute();
$count2 = $del2->rowCount();

$del3 = $db->prepare('SELECT BASLIK FROM egitimler GROUP BY BASLIK');
$del3->execute();
$count3 = $del3->rowCount();

$query1 = $db->query("SELECT * FROM USERS WHERE EMAIL='{$email}'")->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>SOURCE Admin Panel</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-icon-style.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/ui-elements/card.css">
    <link rel="stylesheet" href="css/style.css">
     <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/form.css">
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/profile.css">

</head>

<body> 

<!--====================================================
                         MAIN NAVBAR
======================================================-->        
    <header class="header">
        <nav class="navbar navbar-expand-lg ">
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
               
            </div>
            <div class="container-fluid ">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand">
                            <div class="brand-text brand-big hidden-lg-down"><img src="img/logo-white.png" alt="Logo" class="img-fluid"></div>
                            <div class="brand-text brand-small"><img src="img/logo-icon.png" alt="Logo" class="img-fluid"></div>
                        </a>
                        <a id="toggle-btn" href="#" class="menu-btn active">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Expand-->
                    <li class="nav-item d-flex align-items-center full_scr_exp"><a class="nav-link" href="#"><img src="img/expand.png" onclick="toggleFullScreen(document.body)" class="img-fluid" alt=""></a></li>
                    <!-- Search-->
                    
                   
                    <li class="nav-item dropdown"><a id="profile" class="nav-link logout" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://avatars2.githubusercontent.com/u/25088178?s=460&u=6485e10dea8d66085191716f838cf4b4ab4a9ff8&v=4" alt="..." class="img-fluid rounded-circle" style="height: 30px; width: 30px;"></a>
                        <ul aria-labelledby="profile" class="dropdown-menu profile">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="https://avatars2.githubusercontent.com/u/25088178?s=460&u=6485e10dea8d66085191716f838cf4b4ab4a9ff8&v=4" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5"><?php echo $query3["ADSOYAD"]; ?> </h3><span><?php echo $query3["EMAIL"]; ?> </span>
                                    </div>
                                </a>
                                <hr>
                            </li>
                            <li>
                                <a rel="nofollow" href="profil.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-user "></i>Profil</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="mesajlar.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-envelope-o"></i>Gelen Kutusu</div> 
                                    </div>
                                </a>
                            </li>
                           
                            <li>
                                <a rel="nofollow" href="../logout.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-power-off"></i>Güvenli Çıkış</div>
                                    </div>
                                </a> 
                            </li>
                        </ul>
                    </li>
                </ul> 
            </div>
        </nav>
    </header>