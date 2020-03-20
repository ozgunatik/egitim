<?php

ob_start();
session_start();




include 'baglan.php';
 
$gonderen = $_SESSION["email"];
$kime = $_POST["kime"];
$konu = $_POST["konu"];
$mesaj = $_POST["mesaj"];


if (isset($_POST["mesajyolla"])) {
          
        $query = $db->prepare("INSERT INTO mesajlar SET
        GONDEREN_MAIL = ?,
        ALICI_MAIL = ?,
        BASLIK = ?,
        MESAJ = ? ");
        $insert = $query->execute(array("$gonderen","$kime","$konu","$mesaj"));
            if ( $insert ){
                $last_id = $db->lastInsertId();
                echo "insert işlemi başarılı!";
               
        } 
    }

        
?>