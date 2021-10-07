<html>
<head>
</head>
<body>
	<?php
		include "koneksi.php";
		$id = $_GET['id'];
	$query = "SELECT * FROM kegiatan WHERE id='$id'";
	$result = mysqli_query($connect, $query);
	?>
	<form action ="prosesEdit4.php" method="GET">
		<table>
			<?php
			while($row=mysqli_fetch_array($result)){
				?>
				<tr>
					<td> Tanggal : </td>
					<td><input type="text" name="id" value="<?php echo $row['id'];?>">
					</tr>
					<tr>
						<td> Judul : </td>
						<td><input type="text" name="judul" value="<?php echo $row['judul'];?>"></td>
					</tr>
					<tr>
						<td> Deskripsi : </td>
						<td><textarea name="deskripsi" rows="5" cols="20">
							<?php echo $row['deskripsi'];?></textarea></td>
						</tr>
						<tr>
							<td> Sumber : </td>
							<td><textarea name="sumber" rows="5" cols="20">
								<?php echo $row['sumber'];?></textarea></td>
							</tr>
							<tr>
						
							<td><input type="submit" name="simpan" value="Simpan"></td>
						</tr>
						<?php
			}
			?>
		</table>
	</form>
</body>
</html>