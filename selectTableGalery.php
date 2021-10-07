<html>
<head>
<link rel="stylesheet" type="text/css" href="styleLinkAdmin.css"/>
</head>
<body>
	<table>
		<a href="index.php" target="button">Kembali</a>
		<tr>
			<th> Tanggal</th>
			<th> Judul</th>
			<th> Deskripsi</th>
			<th> Sumber </th>

		</tr>
		<?php
		include "koneksi.php";

		$query = "SELECT * FROM kegiatan";
		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td> <?php echo $row["id"] ?> </td><
					<td> <?php echo $row["judul"] ?> </td><
					<td> <?php echo $row["deskripsi"] ?></td>
					<td> <?php echo $row["sumber"] ?></td>
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