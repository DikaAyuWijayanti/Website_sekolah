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

$sql = "CREATE TABLE kegiatan(
		id INT PRIMARY KEY,
		judul VARCHAR(30) NOT NULL,
		deskripsi VARCHAR(50) NOT NULL,
		sumber VARCHAR(20) NOT NULL)";

		if(mysqli_query($connect, $sql)){
			echo "Tabel kegiatan Berhasil Dibuat";
		}
		else{
			echo "Tabel kegiatan Gagal Dibuat <br> ". mysqli_error($connect);
		}
		mysqli_close($connect);
		?>