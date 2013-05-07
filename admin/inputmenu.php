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
<link href="css/formkategori.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/footer.css" media="screen" />
<link href="css/namamenu.css" rel="stylesheet" type="text/css" />
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

<div id="container">
<form action="submit_menu.php" method="post" class="jNice">
	<fieldset>
        	<dt><label>Nama Menu:</label></dt>
            <dd><input type="text" name="nama_menu"/></dd>
        </dl>
        <dl>
            <input type="submit" name="submit" value="Add"/>
            <input type="reset" name="reset" value="Reset"/>
        </dl>
    </fieldset>
</form>
<script type="text/javascript" src="jquery/jquery.jNice.js"></script>
</div>

<div>
<div class="lihat">
<a href="lihat_menu.php">Lihat Daftar Menu</a>
</div>
</div>

<?php include'footer.php'; ?>
</body>
</html>