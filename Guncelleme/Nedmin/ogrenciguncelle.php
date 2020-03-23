<?php

ob_start();
session_start();

include 'baglan.php';


$adsoyad = $_POST["adsoyad"];
$email = $_POST["email"];
$sifre = md5($_POST["sifre"]);
$tel = $_POST["tel"];
$adres = $_POST["adres"];
$il = $_POST["il"];
$ilce = $_POST["ilce"];
$postakodu = $_POST["postakodu"];
$ulke = $_POST["ulke"];
$universite = $_POST["universite"];
$aciklama = $_POST["aciklama"];
$id = $_POST["id"];

if (isset($_POST["ogrenciguncelle"])) {


    $sorgu = $db->prepare("UPDATE users SET 

        ADSOYAD = ?,
        EMAIL = ?,
        PASSWORD=?,
        TEL =?,
        ADRES =?,
        IL =?,
        ILCE =?,
        POSTAKODU =?,
        ULKE =?,
        UNIVERSITE =?,
        ACIKLAMA =? WHERE ID = ?");


    $sorgu->bindParam(1, $adsoyad);
    $sorgu->bindParam(2, $email);
    $sorgu->bindParam(3, $sifre);
    $sorgu->bindParam(4, $tel);
    $sorgu->bindParam(5, $adres);
    $sorgu->bindParam(6, $il);
    $sorgu->bindParam(7, $ilce);
    $sorgu->bindParam(8, $postakodu);
    $sorgu->bindParam(9, $ulke);
    $sorgu->bindParam(10, $universite);
    $sorgu->bindParam(11, $aciklama);
    $sorgu->bindParam(12, $id);
    
    

    $sorgu->execute();

    if ($sorgu->rowCount() > 0) {
        header("Location:../guncellendi.php");
    } else {
         header("Location:../404.html");
    }

   
        
    }
    

?>

