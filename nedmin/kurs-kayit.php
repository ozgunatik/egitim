<?php 

ob_start();
session_start();

include 'baglan.php';

$gelen = $_GET["gelen"];
$user = $_GET["user"];
 

if (isset($gelen)) {
	
	try {
		
		$query = $db->prepare("INSERT INTO kurslar SET
		OGRENCI_MAIL = ?,
		EGITIM_ID = ?
		");
		$insert = $query->execute(array("$user","$gelen"));
			if ( $insert ){
    			$last_id = $db->lastInsertId();
    			echo "insert işlemi başarılı!";
}

		} 
		catch (Exception $e) {
		
		echo "Olmadı";

		}	
}


 ?>