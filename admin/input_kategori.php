<?php 
include 'session.php';
include 'koneksi.php';
include 'header.php';
include 'menu.php';



$nama_ktgproduk=$_POST['nama_ktgproduk'];
$waktu=date('Y-m-d');//format waktu sekarang


//perintah sql utk pemasukkan data ke tabel kontak
$sql="INSERT INTO ktgproduk VALUES('', '$nama_ktgproduk', '$waktu')";
$hasil=mysql_query($sql);
if ($hasil)
	echo "<p><center>Penambahan kategori <strong>$_POST[nama_ktgproduk] </strong>berhasil :)</b>.
	<meta http-equiv='refresh' content='2; url=kategori.php'>";

else
	echo "<p>Maaf sedang dalam perbaikan.
	<meta http-equiv='refresh' content='2; url=kategori.php'>";
include 'footer.php';
?>
