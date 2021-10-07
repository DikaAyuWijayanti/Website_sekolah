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

$sql = "CREATE TABLE guru(
		id INT PRIMARY KEY,
		nama VARCHAR(30) NOT NULL,
		alamat VARCHAR(50) NOT NULL,
		jenis_kelamin Enum('L','P')DEFAULT 'L',
		status Enum('PNS','KONTRAK')DEFAULT 'PNS',
		jabatan VARCHAR(35) NOT NULL)";

		if(mysqli_query($connect, $sql)){
			echo "Tabel guru Berhasil Dibuat";
		}
		else{
			echo "guru Gagal Dibuat <br> ". mysqli_error($connect);
		}
		mysqli_close($connect);
		?>