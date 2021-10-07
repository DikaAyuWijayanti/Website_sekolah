<html>
<head>
<link rel="stylesheet" type="text/css" href="styleLinkAdmin.css"/>
</head>
<body>
	<table>
		<a href="index.php">Kembali</a>&nbsp;&nbsp;
		<a href="insertFormSiswa.html">Klik data siswa</a>&nbsp;&nbsp;
		<a href="insertFormKep.html">Klik data kepala sekolah</a>&nbsp;&nbsp;
		<a href="insertFormGuru.html">Klik data guru</a>&nbsp;&nbsp;
		<a href="insertFormGalery.html">Klik data galery</a>
		<tr>
			<th> ID</th>
			<th> Nama </th>
			<th> Level</th>
		</tr>
		<?php
		include "koneksi.php";

		$query = "SELECT * FROM user";
		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td> <?php echo $row["id"] ?> </td>
					<td> <?php echo $row["username"] ?></td>
					<td> <?php echo $row["level"] ?></td>
					<?php
			}
		}
		else{
			echo " 0 results";
		}
		?>
	</table>
</body>
</html>