<?php

ob_start();
session_start();

include 'baglan.php';

//LOGİN.PHP Güncelleme İşlemi
$email = $_POST['email'];
$password = md5($_POST['password']);

if (isset($_POST['uyelik'])) {

$yetkiOgren = $db->query("SELECT * FROM USERS where EMAIL='$email' and PASSWORD='$password'")->fetch(PDO::FETCH_ASSOC);
$yetki = $yetkiOgren['YETKI'];

$query = $db->query("SELECT * FROM USERS where EMAIL='$email' and PASSWORD='$password' ");
$query->execute();
$count = $query->FetchColumn();
if ($count>0) {
$_SESSION['email'] = $email;
$_SESSION['yetki'] = $yetki;
	if ($yetki == "4") {
		header("Location:../SourceAdmin/index.php?tur=$email&yet=$yetki");
	} elseif ($yetki == "5") {
		header("Location:../SourceAdmin/index.php?tur=$email&yet=$yetki");
	} elseif ($yetki == "3") {
		header("Location:../profile.php?tur=$email&yet=$yetki");
	}


 
}else{
echo "Kullanıcı Adı ve Şifre Yanlış. Lütfen Tekrar Kontrol Edin!";
}
}

// SON


/*
//SİTE-Ayar.PHP Güncelleme İşlemi
if (isset($_POST['siteayar_guncelle'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
		ayar_tittle=:ayar_tittle,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_author=:ayar_author
		WHERE ayar_id=0");



	$update=$ayarkaydet->execute(array(
		'ayar_tittle'=>$_POST['ayar_tittle'], 
		'ayar_description'=>$_POST['ayar_description'],
		'ayar_keywords'=>$_POST['ayar_keywords'],
		'ayar_author'=>$_POST['ayar_author']
		));

	if ($update) {

		header("location:../production/site-ayar.php?durum=ok");
	}
	else{
		header("location:../production/site-ayar.php?durum=no");
	}



}

// SON

//İLETİŞİM-Ayar.PHP Güncelleme İşlemi

if (isset($_POST['iletisimayar_guncelle'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
		ayar_il=:ayar_il,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai
		WHERE ayar_id=0");



	$update=$ayarkaydet->execute(array(
		'ayar_tel'=>$_POST['ayar_tel'], 
		'ayar_gsm'=>$_POST['ayar_gsm'],
		'ayar_faks'=>$_POST['ayar_faks'],
		'ayar_mail'=>$_POST['ayar_mail'],
		'ayar_ilce'=>$_POST['ayar_ilce'],
		'ayar_il'=>$_POST['ayar_il'],
		'ayar_adres'=>$_POST['ayar_adres'],
		'ayar_mesai'=>$_POST['ayar_mesai']


		));

	if ($update) {

		header("location:../production/iletisim-ayar.php?durum=ok");
	}
	else{
		header("location:../production/iletisim-ayar.php?durum=no");
	}



}

//SON

//APİ-Ayar.PHP Güncelleme İşlemi
if (isset($_POST['apiayar_guncelle'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
		ayar_maps=:ayar_maps,
		ayar_analystic=:ayar_analystic,
		ayar_zopim=:ayar_zopim		
		WHERE ayar_id=0");



	$update=$ayarkaydet->execute(array(
		'ayar_maps'=>$_POST['ayar_maps'], 
		'ayar_analystic'=>$_POST['ayar_analystic'],
		'ayar_zopim'=>$_POST['ayar_zopim']
		));

	if ($update) {

		header("location:../production/api-ayar.php?durum=ok");
	}
	else{
		header("location:../production/api-ayar.php?durum=no");
	}



}

// SON


//SOSYAL-Ayar.PHP Güncelleme İşlemi
if (isset($_POST['sosyalayar_guncelle'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_google=:ayar_google,
		ayar_youtube=:ayar_youtube
		WHERE ayar_id=0");



	$update=$ayarkaydet->execute(array(
		'ayar_facebook'=>$_POST['ayar_facebook'], 
		'ayar_twitter'=>$_POST['ayar_twitter'],
		'ayar_google'=>$_POST['ayar_google'],
		'ayar_youtube'=>$_POST['ayar_youtube']
		));

	if ($update) {

		header("location:../production/sosyal-ayar.php?durum=ok");
	}
	else{
		header("location:../production/sosyal-ayar.php?durum=no");
	}



}

// SON


//MAİL-Ayar.PHP Güncelleme İşlemi
if (isset($_POST['mailayar_guncelle'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
		ayar_smtphost=:ayar_smtphost,
		ayar_smtpuser=:ayar_smtpuser,
		ayar_smtppassword=:ayar_smtppassword,
		ayar_smtpport=:ayar_smtpport
		WHERE ayar_id=0");



	$update=$ayarkaydet->execute(array(
		'ayar_smtphost'=>$_POST['ayar_smtphost'], 
		'ayar_smtpuser'=>$_POST['ayar_smtpuser'],
		'ayar_smtppassword'=>$_POST['ayar_smtppassword'],
		'ayar_smtpport'=>$_POST['ayar_smtpport']
		));

	if ($update) {

		header("location:../production/mail-ayar.php?durum=ok");
	}
	else{
		header("location:../production/mail-ayar.php?durum=no");
	}



}

// SON
$fis_no = $_POST['fis_no'];
$fis_tarih = $_POST['fis_tarih'];
$fis_urunad = $_POST['fis_urunad'];
$fis_fiyat = $_POST['fis_fiyat'];
$fis_magaza = $_POST['fis_magaza'];
$fis_sure = $_POST['fis_sure'];
//HAKKİMİZDA-Ayar.PHP Güncelleme İşlemi
if (isset($_POST['belge_kaydet'])) {

	$ekle = $db -> prepare("INSERT INTO belgeolustur SET 
		fis_no=?,
		fis_tarih=?,
		fis_urunad=?,
		fis_fiyat=?,
		fis_magaza=?,
		fis_sure=?
		");

	$ekle -> bindParam(1,$fis_no);
	$ekle -> bindParam(2,$fis_tarih);
	$ekle -> bindParam(3,$fis_urunad);
	$ekle -> bindParam(4,$fis_fiyat);
	$ekle -> bindParam(5,$fis_magaza);
	$ekle -> bindParam(6,$fis_sure);
	$ekle -> execute();
}
if ($ekle) {

	header("location:../production/belge-olustur.php?durum=ok");
}
else{
	header("location:../production/belge-olustur.php?durum=no");
}





// SON
*/


?>