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
<div class="namamenu">♥ Kategori ♥
</div>
</div>
<?php
$id_ktgproduk=$_GET['id_ktgproduk'];
$sql=mysql_query("SELECT * FROM ktgproduk WHERE id_ktgproduk='$id_ktgproduk'");
$r=mysql_fetch_array($sql)
	?>
<div id="contain" align="center">
<form action="aksiedit_kategori.php?id_ktgproduk=<?php echo "$r[id_ktgproduk]";?>" method="post" enctype="multipart/form-data">
	<fieldset>
    <input type=hidden name=id value="<?php echo $id_ktgproduk;?>">
    <dl>
        	<dt><label>Nama Kategori:</label></dt>
            <dd>

    </dd><?php echo"<input type='text' name='nama_ktgproduk' style='width:200px' value='$r[nama_ktgproduk]'>";?>
</dl></fieldset>
     <fieldset>
     <button type="submit" name="submit" value="update">
     <span>
     <span>Update</span>
     </span>
     </button>
     <button type="reset" name="submit">
     <span>
     <span>Reset</span>
     </span>
     </button>
    </fieldset>
</form>
<script type="text/javascript" src="jquery/jquery.jqtransform.js"></script>
<script language="javascript">
	$(function(){
		$('form').jqTransform({
			imgPath:'images/form/'
		});
	});
</script>

</div>
<?php include'footer.php'; ?>
