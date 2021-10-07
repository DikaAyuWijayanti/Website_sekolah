<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "website_dika";

$connect = mysqli_connect($namaHost, $username, $password, $database);

if($connect){
	echo "Koneksi Dengan MySQL Berhasil <br>";
}
else{
	echo "Koneksi Dengan MySQL Gagal". mysqli_connect_error();
}
$sql = "INSERT INTO guru(id,nama,alamat,jenis_kelamin,status,jabatan)
		VALUES('101', 'Ririn Puji Astuti,S.Pd', 'Jl.Kembang jati No.01','P','PNS', 'Guru mapel Sejarah'),('102', 'Ahmad Dardiri,S.Ag', 'Jl.Sumber jaya No.02', 'L', 'PNS', 'Guru mapel Agama'), ('103', 'Gunawan Risdianto,S.Pd', 'Jl.Cokrokertopati No.18', 'L', 'KONTRAK', 'Guru mapel Pkn'), ('104', 'Citra Kirana,M.Pd.', 'Jl.Pahlawan No.1B','P','PNS', 'Guru mapel Bahasa Inggris'), ('105','Hari Siswanto,S.Pd', 'Jl.Majapahit No.1C', 'L', 'KONTRAK', 'Guru mapel Penjaskes'),('106', 'Endang Puryani,M.Pd', 'Jl.Kembang Sawit No.11', 'P', 'PNS', 'Guru mapel Matematika'),('107','Amirudin,S.Pd', 'Jl.Kartini N0.2A', 'L', 'KONTRAK', 'Guru mapel Fisika'),('108', 'Halimah Aisyah', 'Jl.Sriwijaya No.14', 'P', 'PNS','Guru Ekonomi'),('109', 'Elang Pradana', 'Jl.Rogonoto N0.1A','L', 'PNS', 'Guru mapel Bahasa Jawa'),('110', 'Sinta Alya', 'Jl.Kuwonharjo No.15', 'P', 'KONTRAK', 'Guru mapel Kimia')";

if(mysqli_query($connect, $sql)){
	echo "Record Berhasil Ditambahkan";
}
else{
	echo "Record Gagal Ditambahkan <br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>