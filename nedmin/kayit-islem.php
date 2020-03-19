<?php 

ob_start();
session_start();

include 'baglan.php';

if (isset($_POST['kayitol'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$tel = $_POST['tel'];
	$uyelik = $_POST['uyelik'];
	$university = $_POST['university'];
	$adres = $_POST['adres'];
	$il = $_POST['il'];
	$ilce = $_POST['ilce'];
	$postakodu = $_POST['postakodu'];
	$ulke = $_POST['ulke'];
	$aciklama = $_POST['aciklama'];


	
	try {
		
		$query = $db->prepare("INSERT INTO USERS SET
		TEL = ?,
		EMAIL = ?,
		PASSWORD = ?,
		YETKI = ?,
		ADSOYAD = ?,
		UNIVERSITE = ?,
		ADRES = ?,
		IL = ?,
		ILCE = ?,
		POSTAKODU = ?,
		ULKE = ?,
		ACIKLAMA = ?
		");
		$insert = $query->execute(array("$tel","$email","$password","$uyelik","$username","$university",
	"$adres","$il","$ilce","$postakodu","$ulke","$aciklama"));
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