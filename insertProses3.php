<html>

<?php
include "koneksi.php";

$id = $_GET['id'];
$nama= $_GET['nama'];
$alamat = $_GET['alamat'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$status = $_GET['status'];
$jabatan = $_GET['jabatan'];

$sql="INSERT INTO guru(id, nama, alamat,jenis_kelamin, status ,jabatan)
		VALUE('$id', '$nama', '$alamat', '$jenis_kelamin', '$status', '$jabatan')";

		if(mysqli_query($connect, $sql)){
		echo "Record Berhasil Ditambahkan";?>
		<a href="selectTabelGuru.php">Lihat Tabel</a>
		<?php
		}
		else{
		echo "Record Gagal Ditambahkan <br>" . mysqli_error($connect);
		}
		mysqli_close($connect);
		?>