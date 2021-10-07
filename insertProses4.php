<html>

<?php
include "koneksi.php";

$id = $_GET['id'];
$judul= $_GET['judul'];
$deskripsi = $_GET['deskripsi'];
$sumber= $_GET['sumber'];

$sql="INSERT INTO kegiatan(id, judul, deskripsi,sumber)
        VALUE('$id', '$judul', '$deskripsi', '$sumber')";

        if(mysqli_query($connect, $sql)){
        echo "Record Berhasil Ditambahkan";?>
        <a href="selectTableGalery.php">Lihat Tabel</a>
        <?php
        }
        else{
        echo "Record Gagal Ditambahkan <br>" . mysqli_error($connect);
        }
        mysqli_close($connect);
        ?>