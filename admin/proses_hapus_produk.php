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
<div class="namamenu">♥ Produk - Daftar Produk ♥
</div>
</div>

<?php
$id=$_GET['id_produk'];
if($id=='hapus'){
	$sql=mysql_query("delete from produk where id_produk='$cal'");
	echo "Data berhasil dihapus";
}
else{
	echo "Gagal hapus";
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