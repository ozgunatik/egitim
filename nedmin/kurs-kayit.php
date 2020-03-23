<?php 

ob_start();
session_start();

include 'baglan.php';

$gelen = $_GET["gelen"];
$user = $_GET["user"];

if ($user=="") {
	header("Location:../404.html");
}
elseif (isset($gelen)) {	
	try {
		
		$query = $db->prepare("INSERT INTO kurslar SET
		OGRENCI_MAIL = ?,
		EGITIM_ID = ?
		");
		$insert = $query->execute(array("$user","$gelen"));
			if ( $insert ){
    			$last_id = $db->lastInsertId();
    			header("Location:../basarili.php");

		} 
	}
		catch (Exception $e) {
		
		echo "Olmadı";

		}	
}

 ?>