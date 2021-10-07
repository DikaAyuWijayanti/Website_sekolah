
<html>
<head>
</head>
<body>
<?php
ob_start();
include("koneksi.php");
mysql_query("INSERT INTO data_mahasiswa(id_siswa,nama,kelas,jurusan)
VALUES ('$_POST[id_siswa]',
		'$_POST[nama]',
		'$_POST[kelas]',
		'$_POST[jurusan]')");
		
		header('location:index.php');
		
?>
</body>
</html>
