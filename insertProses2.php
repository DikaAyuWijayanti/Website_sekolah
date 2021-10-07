<html>

<?php
include "koneksi.php";

$id = $_GET['id'];
$nama= $_GET['nama'];
$alamat = $_GET['alamat'];
$pangkat = $_GET['pangkat'];

$sql="INSERT INTO kepalasekolah(id, nama, alamat, pangkat)
		VALUE('$id', '$nama', '$alamat', '$pangkat')";

		if(mysqli_query($connect, $sql)){
		echo "Record Berhasil Ditambahkan";?>
		<a href="selectTabelKep.php">Lihat Tabel</a>
		<?php
		}
		else{
		echo "Record Gagal Ditambahkan <br>" . mysqli_error($connect);
		}
		mysqli_close($connect);
		?>