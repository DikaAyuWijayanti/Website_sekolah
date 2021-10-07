<?php
$namaHost = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($namaHost, $username, $password);

if($connect){
	echo "Koneksi Dengan MySQL Berhasil";
}
else{
	echo "Koneksi Dengan MySQL Gagal". mysqli_connect_error();
}
?>