<?php 
include 'session.php'; 
include 'koneksi.php'; 
include 'header.php';
include 'menu.php'; 


$tipe_file=$_FILES['fupload']['type'];
$tmpfile=$_FILES['fupload']['tmp_name'];
$namafile=$_FILES['fupload']['name'];


$nama_ktgproduk=$_POST['nama_ktgproduk'];
$nama_produk=$_POST['nama_produk'];
$hrg_satuan=$_POST['hrg_satuan'];
$hrg_lusin=$_POST['hrg_lusin'];
//$gbr_produk=$_POST['gbr_produk'];
$waktu=date('Y-m-d');//format waktu sekarang

if(!empty($tmpfile)){
$folder="images/";
$file=$folder.$namafile;
//upload
move_uploaded_file($tmpfile,$file);

$sql="INSERT INTO produk (id_produk, nama_ktgproduk, nama_produk, hrg_satuan, hrg_lusin, gbr_produk, waktu) VALUES('', '$nama_ktgproduk', '$nama_produk', '$hrg_satuan', '$hrg_lusin', '$namafile', '$waktu')";
}
$hasil=mysql_query($sql);
if($hasil)
	echo "<p><center>Penambahan produk <strong> $nama_produk </strong> berhasil :)</b>.
	<meta http-equiv='refresh' content='2; url=produk.php'>
	";
else
	echo "<p>Maaf sedang dalam perbaikan.
	<meta http-equiv='refresh' content='2; url=produk.php'>
	";

?>
<?php include'footer.php'; ?>
