<html>
<head>
<link rel="stylesheet" type="text/css" href="styleLinkAdmin.css"/>
</head>
<body>
	<table>
		<a href="index.php">Kembali</a>
		<tr>
			<th> NIP</th>
			<th> Nama </th>
			<th> Alamat </th>
			<th>Jenis Kelamin</th>
			<th> Status </th>
			<th> Jabatan</th>

		</tr>
		<?php
		include "koneksi.php";

		$query = "SELECT * FROM guru";
		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td> <?php echo $row["id"] ?> </td><
					<td> <?php echo $row["nama"] ?></td>
					<td> <?php echo $row["alamat"] ?></td>
					<td> <?php echo $row["jenis_kelamin"]?></td>
					<td> <?php echo $row["status"] ?></td>
					<td> <?php echo $row["jabatan"] ?></td>
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