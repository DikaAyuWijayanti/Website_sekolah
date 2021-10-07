<?php
include "koneksi.php";

$id = $_GET['id'];
$nama= $_GET['nama'];
$alamat= $_GET['alamat'];
$jenis_kelamin= $_GET['jenis_kelamin'];
$status=$_GET['status'];
$jabatan= $_GET['jabatan'];

$query ="UPDATE guru SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', status='$status', jabatan='$jabatan' WHERE id='$id'";
$result=mysqli_query($connect, $query);

if($result){
	echo "Berhasil Update Data ke Database";
	?>
	<a href="homeCRUD3.php"> Lihat Data di Tabel</a>
	<?php
}else{
	echo "Gagal Update Data" . mysqli_error($connect);
}
?>