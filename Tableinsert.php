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
$sql = "INSERT INTO kepalasekolah(id,nama,alamat,pangkat)
		VALUES('111', 'Dra. Dika Ayu Wijayanti', 'Magetan', 'Pembina/ IVB')";

if(mysqli_query($connect, $sql)){
	echo "Record Berhasil Ditambahkan";
}
else{
	echo "Record Gagal Ditambahkan <br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>