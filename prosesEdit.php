<?php
include "koneksi.php";

$id = $_GET['id'];
$nama= $_GET['nama'];
$alamat= $_GET['alamat'];
$kelas=$_GET['kelas'];
$jurusan = $_GET['jurusan'];

$query ="UPDATE datasiswa SET nama='$nama', alamat='$alamat', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'";
$result=mysqli_query($connect, $query);

if($result){
	echo "Berhasil Update Data ke Database";
	?>
	<a href="homeCRUD.php"> Lihat Data di Tabel</a>
	<?php
}else{
	echo "Gagal Update Data" . mysqli_error($connect);
}
?>