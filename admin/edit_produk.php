<?php include 'session.php'; ?>
<?php include 'koneksi.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />

<link href="css/juizDropDownMenu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" media="screen" />
<link href="css/namamenu.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#FFFFFF">
<!-- Save for Web Slices (all.psd) -->
<?php include 'header.php';?>
<?php include 'menu.php'; ?>
<div>
<div class="namamenu">♥ Produk ♥
</div>
</div>
<?php
$id_produk=$_GET['id_produk'];
$sql=mysql_query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$r=mysql_fetch_array($sql)
?>
<div id="contain">
<form action="aksiedit_produk.php?id_produk=<?php echo $r['id_produk'];?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_produk" value="<?php echo $r['id_produk']; ?>">
<table border="1px" width="650" align="center">
<tr>
	<td>Kategori</td>
	<td>:</td>
	<td><select name="nama_ktgproduk">
	<?php 
//$sql2=mysql_query('SELECT * FROM ktgproduk WHERE id_ktgproduk='.$id_ktgproduk);
//$data2=mysql_fetch_array($sql2);

	$sql3=mysql_query("SELECT * FROM  ktgproduk");
	while ($w=mysql_fetch_array($sql3)){
		if($data['nama_ktgproduk']==$w['id_ktgproduk']){
			echo'<option value="'.$w['id_ktgproduk'].'" SELECTED>'.$w[nama_ktgproduk].'</option>';
		
		}else
		{
			echo '<option value="'.$w[id_ktgproduk].'">'.$w['nama_ktgproduk'].'</option>';
		}
	}
	?></select></td>
	</tr>
    
	<tr>
	<td>Produk</td>
	<td>:</td>
	<td><input type="text" name="nama_produk" size=60 value="<?php echo $r['nama_produk'];?>"></td>
	</tr>
    
	<tr>
	<td>Harga Satuan</td>
	<td>:</td>
	<td><input type="text" name="hrg_satuan" size=60 value="<?php echo $r['hrg_satuan']; ?>"></td>
	</tr>
    
	<tr>
	<td>Harga Per Lusin</td>
	<td>:</td>
	<td><input type="text" name="hrg_lusin" size=60 value="<?php echo $r['hrg_lusin'];?>"></td>
	</tr>
    
	<tr>
	<td>Gambar Lama</td>
	<td>:</td>
	<td><img src="images/<?php echo $r['gbr_produk'];?>" width="100""></td>
	<input type="hidden" value="<?php echo $r['gbr_produk'];?>" name="noupdate" >
	</tr>
    
	<tr>
	<td>Gambar</td>
	<td>:</td>
	<td><input type="file" name="fupload" size=60 ></td>
	</tr>
	<tr>
	<td colspan="3"><input type="submit" value="simpan"></td>
	</tr>
	</table></form>
<?php include'footer.php'; ?>
