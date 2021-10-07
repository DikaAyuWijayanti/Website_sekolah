<html>

<?php
include "koneksi.php";

$id = $_GET['id'];
$nama= $_GET['nama'];
$alamat = $_GET['alamat'];
$kelas = $_GET['kelas'];
$jurusan = $_GET['jurusan'];

$sql="INSERT INTO datasiswa(id, nama, alamat, kelas, jurusan)
		VALUE('$id', '$nama', '$alamat', '$kelas', '$jurusan')";

		if(mysqli_query($connect, $sql)){
		echo "Record Berhasil Ditambahkan";?>
		<a href="selectTabelSiswa.php">Lihat Tabel</a>
		<?php
		}
		else{
		echo "Record Gagal Ditambahkan <br>" . mysqli_error($connect);
		}
		mysqli_close($connect);
		?>