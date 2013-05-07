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
$koneksql=mysql_connect($host,$user,$pass);
$pilihdb=mysql_select_db($dtbase);

?>
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
<div class="namamenu">♥   Data Gambark   ♥
</div>
</div>
<div id="container">
	<div id="content">
		<?
			$sql="select * from gbr_produk";
			$aksi=mysql_query($sql);
			
			echo"
			<table cellspacing='0' cellpadding='0'>
			<tr>
				<th>ID Gambar Produk</th>
                <th>Gambar Produk</th>
                <th>Waktu</th>
				<th colspan='2'>Action</th>
			</tr>";
			
			$no=1;
			while($tampil=mysql_fetch_array($aksi));?>
            
			<tr>
            	<td><? echo $no;?></td>
				<td><img src="image/<? echo $tampil['nama_gbr'];?>" /></td>
				<td><?=$tampil['waktu'];?></td>
				<td>
                <a href="#<=?=$tampil['id_ktgproduk'];?>" name="edit">Edit</a>
                </td>
                <td>
                <a href="#<=?=$tampil['id_ktgproduk'];?>" name="hapus">Hapus</a>
                </td>
			</tr>
            <?php
			$no++;
			?>	
		</table>
        <script type="text/javascript" src="jquery/tablecloth.js"></script>
	</div>
</div>
<div>
<div class="namamenu lihat">
<a href="gambar_produk.php">Tambah Gambar</a>
</div>
</div>

<div>
<div class="footer">
Copyright 2012 by Hakkenkoe
</div>
</div>
</body>
</html>