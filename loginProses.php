<?php
include "koneksi.php";

$username = $_POST['username'];
$password= $_POST['password'];

$query="SELECT *FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($connect, $query);
$cek= mysqli_num_rows($result);

		if($cek){
		echo "Anda Berhasil Login.Silakan Menuju ";?>
		<a href="homeAdmin2.html">Halaman HOME</a>
		<?php
		}else{
		echo "Anda Gagal Login. Silahkan";?>
		<a href="index.php">Login Kembali</a>
		<?php
		echo mysqli_error($connect); 
		}
		?>