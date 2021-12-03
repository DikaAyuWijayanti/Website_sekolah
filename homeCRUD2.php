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
			<th> Pangkat</th>
			<th> Aksi </th>
		</tr>
		<?php
		include "koneksi.php";

		$query = "SELECT * FROM kepala_sekolah";
		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
				<tr>
					<td> <?php echo $row["id"] ?> </td>
					<td> <?php echo $row["nama"] ?></td>
					<td> <?php echo $row["alamat"] ?></td>
					<td> <?php echo $row["pangkat"] ?></td>
					<td> 
						<a href="edit.php?id=<?php echo $row['id']; ?>">  Edit</a>
						<a href="hapus2.php?id=<?php echo $row['id'];?>">   Hapus</a>
						<a href="logout2.php?id=<?php echo $row['id'];?>"> Logout</a>
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
