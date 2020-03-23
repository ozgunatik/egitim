<?php

ob_start();
session_start();

include 'baglan.php';


$logo = $_POST["logo"];
$aciklama = $_POST["aciklama"];
$baslik = $_POST["baslik"];
$adres1 = $_POST["adres1"];
$adres2 = $_POST["adres2"];
$adres3 = $_POST["adres3"];
$tel1 = $_POST["tel1"];
$tel2 = $_POST["tel2"];
$tel3 = $_POST["tel3"];
$link = $_POST["link"];
$twitter = $_POST["twitter"];
$insta = $_POST["insta"];
$facebook = $_POST["facebook"];
$ayar = 1;

if (isset($_POST["ayarguncelle"])) {


    $sorgu = $db->prepare("UPDATE siteayar SET 

        LOGO = ?,
        ACIKLAMA = ?,
        BASLIK=?,
        ILET_BASLIK1 =?,
        ILET_BASLIK1 =?,
        ILET_BASLIK1 =?,
        ILET_TEL1 =?,
        ILET_TEL2 =?,
        ILET_TEL3 =?,
        LINKEDIN =?,
        FACEBOOK =?,
        TWITTER =?,
        INSTAGRAM =? WHERE ID = ?");


    $sorgu->bindParam(1, $logo);
    $sorgu->bindParam(2, $aciklama);
    $sorgu->bindParam(3, $baslik);
    $sorgu->bindParam(4, $adres1);
    $sorgu->bindParam(5, $adres2);
    $sorgu->bindParam(6, $adres3);
    $sorgu->bindParam(7, $tel1);
    $sorgu->bindParam(8, $tel2);
    $sorgu->bindParam(9, $tel3);
    $sorgu->bindParam(10, $link);
    $sorgu->bindParam(11, $facebook);
    $sorgu->bindParam(12, $twitter);
    $sorgu->bindParam(13, $insta);
    $sorgu->bindParam(14, $ayar);
    
    

    $sorgu->execute();

    if ($sorgu->rowCount() > 0) {
        header("Location:../guncellendi.php");
    } else {
         header("Location:../404.html");
    }

   
        
    }
    

?>

