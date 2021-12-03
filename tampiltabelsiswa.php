<html>
<head>
<link rel="stylesheet" type="text/css" href="styleLinkAdmin.css"/>
</head>
<body>
	<table>
		<a href="index.php">Kembali</a>
		<tr>
			<th> ID</th>
			<th> Nama </th>
			<th> Alamat </th>
			<th> Kelas </th>
			<th> Jurusan </th>

		</tr>
		<?php
		include "koneksi.php";

		$query = "SELECT * FROM datasiswa";
		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td> <?php echo $row["id"] ?> </td><
					<td> <?php echo $row["nama"] ?></td>
					<td> <?php echo $row["alamat"] ?></td>
					<td> <?php echo $row["kelas"] ?></td>
					<td> <?php echo $row["jurusan"] ?></td>
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