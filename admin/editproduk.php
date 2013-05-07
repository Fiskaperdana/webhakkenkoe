<?php include 'session.php'; ?>
<?php include 'koneksi.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>? Hakkenkoe� | The Art of Handmade ?</title>
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
<?php include 'header.php';?>
<?php include 'menu.php'; ?>
<div>
<div class="namamenu">♥ Produk - Edit Produk ♥
</div>
</div>
<div id="container">
<form action="proses_edit_produk.php" method="post" class="jNice" enctype="multipart/form-data">
	<fieldset>
        <dl>
		<?php
		$sql1='select * from produk where id_produk='.$_GET["id_produk"];
		$tampil1=mysql_query($sql1);
		while ($pilihproduk=mysql_fetch_array($tampil1))
		{
		?>
        	<dt><label>ID Kategori :</label></dt>
            <dd><select name="id_ktgproduk" size="1" multiple="MULTIPLE" value="<?php echo $pilihproduk['id_ktgproduk'];?>"/>
            <?php
			$sql="SELECT * from ktgproduk";
			$tampil=mysql_query($sql);
			
			while($id_ktgproduk=mysql_fetch_array($tampil)){
				echo"<option value='$id_ktgproduk[id_ktgproduk]'=>'$id_ktgproduk[nama_ktgproduk]'</option>";
			}
			?></select>
		
            </dd>
        </dl>
         <dl>
        	<dt><label>Nama Produk :</label></dt>
            <dd><input type="text" name="nama_produk" value=" <?php echo $pilihproduk['nama_produk'];?>" size="40"/></dd>
        </dl>
        <dl>
        	<dt><label>Harga Satuan :</label></dt>
            <dd><input type="text" name="hrg_satuan" value=" <?php echo $pilihproduk['hrg_satuan'];?>" size="40"/></dd>
        </dl>
        <dl>
        	<dt><label>Harga Per Lusin :</label></dt>
            <dd><input type="text" name="hrg_lusin" value=" <?php echo $pilihproduk['hrg_lusin'];?>" size="40"/></dd>
        </dl>
        <dl>
        	<dt><label>Gambar :</label></dt>
			<img src="<?php echo $pilihproduk['gbr_produk']; ?>"/>
            <dd><input type="file" name="fupload" size="18" /></dd>
        </dl>
        <dl>
            <input type="submit" value="Submit"/>
            <input type="reset"  value="Reset"/>
        </dl>
		<?php } ?>
    </fieldset>
</form>
</div>
<script type="text/javascript" src="jquery/jquery.jNice.js"></script>
</div>
</div>
<div>
<div class="lihat">
<a href="lihat_produk.php">Lihat Data Produk</a>
</div>
</div>

<div>
<div class="footer">
Copyright 2012 by Hakkenkoe
</div>
</div>
</body>
</html>