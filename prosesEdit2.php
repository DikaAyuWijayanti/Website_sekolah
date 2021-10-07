<?php
include "koneksi.php";

$id = $_GET['id'];
$nama= $_GET['nama'];
$alamat= $_GET['alamat'];
$pangkat=$_GET['pangkat'];

$query ="UPDATE kepalasekolah SET nama='$nama', alamat='$alamat', pangkat='$pangkat' WHERE id='$id'";
$result=mysqli_query($connect, $query);

if($result){
	echo "Berhasil Update Data ke Database";
	?>
	<a href="homeCRUD2.php"> Lihat Data di Tabel</a>
	<?php
}else{
	echo "Gagal Update Data" . mysqli_error($connect);
}
?>