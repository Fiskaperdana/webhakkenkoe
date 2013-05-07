<?php include 'session.php'; ?>
<?php include 'koneksi.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<head>        
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
<?php include 'header.php';?>
<?php include 'menu.php'; ?>
<div>
<div class="namamenu">♥ Menu - Tambah Menu ♥
</div>
</div>
<? 
$nama_menu=$_POST['namamenu'];


//perintah sql utk pemasukkan data ke tabel kontak
$sql="INSERT INTO menuadmin VALUES('', '$nama_menu')";
$hasil=mysql_query($sql);
if ($hasil)
	echo "<p><center>Penambahan menu $_POST[nama_ktgproduk] berhasil :)</b>.";
else
	echo "<p>Maaf sedang dalam perbaikan.";
?><br />
<a href="inputmenu.php" >Kembali</a>
</div>
<div>
<div class="namamenu lihat">
<a href="lihat_menu.php">Lihat Daftar Menu</a>
</div>
</div>

<?php include'footer.php'; ?>
</body>
</html>