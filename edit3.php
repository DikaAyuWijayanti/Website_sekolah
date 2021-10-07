<html>
<head>
</head>
<body>
	<?php
		include "koneksi.php";
		$id = $_GET['id'];
	$query = "SELECT * FROM guru WHERE id='$id'";
	$result = mysqli_query($connect, $query);
	?>
	<form action ="prosesEdit3.php" method="GET">
		<table>
			<?php
			while($row=mysqli_fetch_array($result)){
				?>
				<tr>
					<td> Id : </td>
					<td><input type="text" name="id" value="<?php echo $row['id'];?>">
					</tr>
					<tr>
						<td> Nama : </td>
						<td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
					</tr>
					<tr>
						<td> Alamat : </td>
						<td><textarea name="alamat" rows="5" cols="20">
							<?php echo $row['alamat'];?></textarea></td>
						</tr>
						<tr>
							<td> Jenis Kelamin : </td>
						<td><textarea name="jenis_kelamin" rows="5" cols="20">
							<?php echo $row['jenis_kelamin'];?></textarea></td>
						</tr>
						<tr>
							<td> Status : </td>
							<td><textarea name="status" rows="5" cols="20">
								<?php echo $row['status'];?></textarea></td>
							</tr>
							<tr>
						<td> Jabatan : </td>
						<td><textarea name="jabatan" rows="5" cols="20">
							<?php echo $row['jabatan'];?></textarea></td>
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