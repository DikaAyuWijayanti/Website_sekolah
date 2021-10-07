<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "website_dika";

$connect = mysqli_connect($namaHost, $username, $password, $database);

if($connect){
	echo "Koneksi Dengan MySQL Berhasil <br>";
}
else{
	echo "Koneksi Dengan MySQL Gagal". mysqli_connect_error();
}

$sql = "CREATE TABLE datasiswa(
		id INT PRIMARY KEY,
		nama VARCHAR(30) NOT NULL,
		alamat VARCHAR(50) NOT NULL,
		kelas VARCHAR(20) NOT NULL,
		jurusan VARCHAR(45) NOT Null)";

		if(mysqli_query($connect, $sql)){
			echo "Tabel datasiswa Berhasil Dibuat";
		}
		else{
			echo "Tabel datasiswa Gagal Dibuat <br> ". mysqli_error($connect);
		}
		mysqli_close($connect);
		?>