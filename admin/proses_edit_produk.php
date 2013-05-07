<?php include 'session.php'; ?>
<?php include 'koneksi.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/juizDropDownMenu.css" rel="stylesheet" type="text/css" />
<link href="css/jNice.css" rel="stylesheet" type="text/css"/>
<link href="css/lihat_kategori.css" rel="stylesheet" type="text/css"/>
<link href="css/tabel_lihatkategori.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/footer.css" media="screen" />
<link href="css/namamenu.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#FFFFFF">
<!-- Save for Web Slices (all.psd) -->
<div id="all" align="center">

<?php include 'header.php';?>
<?php include 'menu.php'; ?>

<div>
<div class="namamenu">♥ Kategori - Daftar Kategori ♥
</div>
</div>

<?php
$id=$_GET['id_produk'];

$id_ktgproduk=$_POST['id_ktgproduk'];
$nama_produk=$_POST['nama_produk'];
$hrg_satuan=$_POST['hrg_satuan'];
$hrg_lusin=$_POST['hrg_lusin'];
//$gbr_produk=$_POST['gbr_produk'];
$waktu=date('Y-m-d');//format waktu sekarang

$tipe_file=$_FILES['fupload']['type'];
$tmpfile=$_FILES['fupload']['tmp_name'];
$namafile=$_FILES['fupload']['name'];
$folder='/images/';
$file=$folder.$namafile;

move_uploaded_file($tmpfile,$file);
echo "Stored in : ".$file;

$sql=mysql_query("update produk set
id_ktgproduk='$id_ktgproduk',
nama_produk='$nama_produk',
hrg_satuan='$hrg_satuan',
hrg_lusin='$hrg_lusin',
gbr_produk='$file',
waktu='$waktu',
where id_produk='$id'");

if($sql){
	echo "</br>Ubah data berhasil";
}
else {
	echo "</br>Gagal diubah";
}

?>

<div>
<div class="lihat">
<a href="lihat_produk.php">Lihat Data Produk</a>
</div>
</div>

<?php include'footer.php'; ?>

</div>
</body>
</html>