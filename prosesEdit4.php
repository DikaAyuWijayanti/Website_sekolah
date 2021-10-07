<?php
include "koneksi.php";

$id = $_GET['id'];
$judul= $_GET['judul'];
$deskripsi= $_GET['deskripsi'];
$sumber= $_GET['sumber'];

$query ="UPDATE kegiatan SET id='$id', judul='$judul', deskripsi='$deskripsi', sumber='$sumber' WHERE id='$id'";
$result=mysqli_query($connect, $query);

if($result){
	echo "Berhasil Update Data ke Database";
	?>
	<a href="homeCRUD4.php"> Lihat Data di Tabel</a>
	<?php
}else{
	echo "Gagal Update Data" . mysqli_error($connect);
}
?>