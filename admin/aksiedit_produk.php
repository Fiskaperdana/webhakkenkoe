<?php include 'session.php'; ?>
<?php include 'koneksi.php'; ?>
<?php include 'header.php';?>
<div align="center">

<?php

$id_produk=$_POST['id_produk'];
$tipe_file=$_FILES['fupload']['type'];
$tmpfile=$_FILES['fupload']['tmp_name'];
$namafile=$_FILES['fupload']['name'];
$folder="images/";
$file=$folder.$namafile;

if (empty($namafile)){
  $namafile=$_POST['noupdate'];
}
else {
	move_uploaded_file($tmpfile,$file);
	echo"Stored in $file.";

}

$nama_ktgproduk=$_POST['nama_ktgproduk'];
$nama_produk=$_POST['nama_produk'];
$hrg_satuan=$_POST['hrg_satuan'];
$hrg_lusin=$_POST['hrg_lusin'];
$waktu=date('Y-m-d');//format waktu sekarang
//upload
$query=('UPDATE produk SET nama_ktgproduk="'.$nama_ktgproduk.'", nama_produk="'.$nama_produk.'", hrg_satuan='.$hrg_satuan.', hrg_lusin='.$hrg_lusin.', gbr_produk="'.$namafile.'", waktu="'.$waktu.'" WHERE id_produk='.$id_produk);
$sql=mysql_query($query);

if($sql){
echo"Data </strong>$nama_produk</strong> berhasil di ubah.
<meta http-equiv='refresh' content='10; url=produk.php'>";
}
else
{ echo"Data </strong>$nama_produk</strong> gagal di ubah.<meta http-equiv='refresh' content='10; url=produk.php'>";
echo $query;
}
?>
</div>
<?php include'footer.php'; ?>
