<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

//create connection
$conn =mysqli_connect($servername,$username,$password,$dbname);
//check connection
if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}

//Create table
$sql = "CREATE TABLE kontak (id integer(4) NOT NULL AUTO_INCREMENT , Nama VARCHAR(30) NOT NULL, Jkel VARCHAR(10), Email VARCHAR(50), Alamat VARCHAR(50), Kota VARCHAR(20), Pesan Text )";
if (mysqli_query($conn, $sql)) {
	echo "Database created succesfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>