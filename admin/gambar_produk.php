<?php
session_start();
if (!isset($_SESSION['username'])){
	die("Access denied!");
};

$host="localhost";
$user="root";
$pass="";
$dtbase="webhakkenkoe";

//koneksi ke database
mysql_connect($host,$user,$pass);
mysql_select_db($dtbase);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/juizDropDownMenu.css" rel="stylesheet" type="text/css" />
<link href="css/jNice.css" rel="stylesheet" type="text/css"/>
<link href="css/formproduk.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/footer.css" media="screen" />
<link href="css/namamenu.css" rel="stylesheet" type="text/css" />
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
<div id="container">
<form action="input_gambar_produk.php" method="post" class="jNice" enctype="multipart/form-data">
	<fieldset>
        <dl>
        	<dt><label>File :</label></dt>
            <dd><input type="file" name="file" size="18" /></dd>
        </dl>
        <dl>
            <input type="submit" value="Submit" name="upload"/>
            <input type="reset"  value="Reset" name="reset"/>
        </dl>
    </fieldset>
</form>
</div>
<script type="text/javascript" src="jquery/jquery.jNice.js"></script>
</div>
</div>
<div>
<div class="namamenu lihat">
<a href="lihat_gambar_produk.php">Lihat Data Gambar Produk</a>
</div>
</div>

<div>
<div class="footer">
Copyright 2012 by Hakkenkoe
</div>
</div>
</body>
</html>