<html>
<head>
<link rel="stylesheet" type="text/css" href="styleLinkAdmin.css"/>
</head>
<body>
	<table>
		<tr>
			<th> NIP</th>
			<th> Nama </th>
			<th> Alamat </th>
			<th>Jenis_kelamin</th>
			<th> Status</th>
			<th>Jabatan</th>
			<th> Aksi </th>
		</tr>
		<?php
		include "koneksi.php";

		$query = "SELECT * FROM guru";
		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
				<tr>
					<td> <?php echo $row["id"] ?> </td>
					<td> <?php echo $row["nama"] ?></td>
					<td> <?php echo $row["alamat"] ?></td>
					<td> <?php echo $row["jenis_kelamin"] ?></td>
					<td> <?php echo $row["status"] ?></td>
					<td> <?php echo $row["jabatan"] ?></td>
					<td> 
						<a href="edit3.php?id=<?php echo $row['id']; ?>">  Edit</a>
						<a href="hapus3.php?id=<?php echo $row['id'];?>">   Hapus</a>
						<a href="logout3.php?id=<?php echo $row['id'];?>"> Logout</a>
					</td>
				</tr>
				<?php
			}
		}
		else{
			echo "0 results";
		}
		?>
	</table>
</body>
</html>
