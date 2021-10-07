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
$sql = "INSERT INTO datasiswa(id,nama,alamat,kelas,jurusan)
		VALUES('1', 'Yurischa Aulya', 'Mojokerto', '12A', 'Ipa'), ('2', 'Vinka Amalia', 'Pasuruan', '12B','Pkn'), ('3', 'Nio Dyah', 'Nganjuk', '12C', 'Biologi'),('4', 'Riris Silvia', 'Malang', '12D', 'Kimia'), ('5', 'Eldha Nirwana', 'Tuban', '12E', 'Sejarah'),('6', 'Chelvin', 'Sawojajar', '12F','Matematika'), ('7', 'Aldi Rismanto', 'Magetan', '12G', 'Agama')";

if(mysqli_query($connect, $sql)){
	echo "Record Berhasil Ditambahkan";
}
else{
	echo "Record Gagal Ditambahkan <br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>