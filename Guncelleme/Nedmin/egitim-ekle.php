<?php

ob_start();
session_start();

include 'baglan.php';


    $egitimid = rand(1, 500);
   

   


$egitmenid = $_POST["egitmenid"];
$baslik = $_POST["baslik"];
$kategori = $_POST["kategori"];
$detay = $_POST["detay"];
$aciklama = $_POST["aciklama"];
$fiyat = $_POST["fiyat"];


 
 

if (isset($_POST["egitimver"])) {
    
  
 
        if ($_FILES["dosya"]["type"]=="image/jpeg"){  //dosya tipi jpeg olsun
 
            
            $dosya_adi=$_FILES["dosya"]["name"];
 
            //Resimi kayıt ederken yeni bir isim oluşturalım
            $uret=array("as","rt","ty","yu","fg");
            $uzanti=substr($dosya_adi,-4,4);
            $sayi_tut=rand(1,10000);
 
            $yeni_ad="images/".$uret[rand(0,4)].$sayi_tut.$uzanti;
 
            //Dosya yeni adıyla uploadklasorune kaydedilecek
 
            if (move_uploaded_file($_FILES["dosya"]["tmp_name"],$yeni_ad)){
                

        
        $query = $db->prepare("INSERT INTO egitimler SET
        EGITMEN_ID = ?,
        EGITIM_ID = ?,
        BASLIK = ?,
        KATEGORI = ?,
        DETAY = ?,
        ACIKLAMA = ?,
        FIYAT = ?,
        LOGO = ?
        ");
        $insert = $query->execute(array($egitmenid,$egitimid,"$baslik","$kategori","$detay","$aciklama","$fiyat","$yeni_ad"));
            if ( $insert ){
                $last_id = $db->lastInsertId();
               header("Location:../basarili.php");
               
        } 
    }
}
        


}
?>