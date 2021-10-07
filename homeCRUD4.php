   <html>
<head>
<link rel="stylesheet" type="text/css" href="styleLinkAdmin.css"/>
</head>
<body>
	<table>
		<tr>
			<th> Tanggal</th>
			<th> Judul </th>
			<th> Deskripsi </th>
			<th>Sumber</th>
		</tr>
		<?php
		include "koneksi.php";

		$query = "SELECT * FROM kegiatan";
		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
				<tr>
					<td> <?php echo $row["id"] ?> </td>
					<td> <?php echo $row["judul"] ?></td>
					<td> <?php echo $row["deskripsi"] ?></td>
					<td> <?php echo $row["sumber"] ?></td>
					<td> 
						<a href="editdata4.php?id=<?php echo $row['id']; ?>">  Edit</a>
						<a href="hapus4.php?id=<?php echo $row['id'];?>">   Hapus</a>
						<a href="logout4.php?id=<?php echo $row['id'];?>"> Logout</a>
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
