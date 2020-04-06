<?php

include"login/admin/koneksi.inc.php";
mysqli_connect($servername,$username,$password) or die(mysqli_error());
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());

$in 			= $_POST['id'];
$Nama 			= $_POST['Nama'];
$Jkel 			= $_POST['Jkel'];
$Email 			= $_POST['Email'];
$Alamat 		= $_POST['Alamat'];
$Kota 			= $_POST['Kota'];
$Pesan 			= $_POST['Pesan'];

$sql="insert kontak set Nama='$Nama', Jkel='$Jkel', Email='$Email', Alamat='$Alamat', Kota='$Kota', Pesan='$Pesan'";
mysqli_query($koneksi, $sql) or die (mysqli_error());

header("location:kontak.html");
?>