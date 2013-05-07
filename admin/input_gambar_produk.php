<?php
session_start();
if (!isset($_SESSION['username'])){
	die("Access denied!");
};

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/juizDropDownMenu.css" rel="stylesheet" type="text/css" />
<link href="css/jNice.css" rel="stylesheet" type="text/css"/>
<link href="css/formkategori.css" rel="stylesheet" type="text/css"/>
<link href="css/namamenu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" media="screen" />
</head>
<body bgcolor="#FFFFFF">
<!-- Save for Web Slices (all.psd) -->
<div id="all" align="center">
<div id="header">
	<div class="hgbr" id="logo" align="center">
    <img src="images/header2.png" alt"logo" align="top" />
</div>
</div>
<div>
<ul id="dropdown">
<li><a href="#rea">Pengaturan</a>
	<ul>
		<li><a href="kategori.php">Edit Kategori</a></li>
		<li><a href="produk.php">Edit Produk</a></li>
		<li><a href="gambar_produk.php">Edit Gambar</a></li>
    </ul>
                
	<li><a href="#comp">Laporan Transaksi</a></li>
		<li><a href="logout.php">Logout</a></li>
		<script type="text/javascript" src="jquery/jquery-1.7.1.min.js"></script>	
		<script type="text/javascript" src="jquery/juizDropDownMenu-1.5.min.js"></script>
		<script type="text/javascript">
		$(function(){
			$("#dropdown").juizDropDownMenu({
				'showEffect' : 'fade',
				'hideEffect' : 'slide'
			});
		});
		</script>
</li>
</ul>
</div>
<div>
<div class="namamenu">♥   Edit Gambar Produk   ♥
</div>
</div>
<div>
<? //proses pemasukkan data ke database
$host="localhost";
$user="root";
$pass="";
$dtbase="webhakkenkoe";

//koneksi ke database
mysql_connect($host,$user,$pass);
mysql_select_db($dtbase);

if($_POST['upload']){
$lokasi_file=$_FILES['file']['tmp_name'];
$tipe_file=$_FILES['file']['type'];
$nama_file=$_FILES['file']['name'];
$waktu=date('Y-m-d');//format waktu sekarang

//upload
if(move_uploaded_file($lokasi_file, $_SERVER['DOCUMENT_ROOT']. '/webhakkenkoe/images/'.$nama_file)){
	$sql=mysql_query("insert into gbr_produk (id_gbrproduk, nama_gbr, destination, tipefile, waktu) values (null, '".$nama_file."', '".$destination."','".$tipe_file."','".$waktu."')");

if($sql) header ('Location: gambar_produk.php');
}

//jika gagal upload
else
	echo"Upload gagal!";
}
?>
<br />
<a href="gambar_produk.php" >Kembali ke edit gambar</a>
</div>
<div>
<div class="namamenu lihat">
<a href="lihat_gambar_produk.php">Lihat Data Gambar</a>
</div>
</div>

<div>
<div class="footer">
Copyright 2012 by Hakkenkoe
</div>
</div>
</body>
</html>