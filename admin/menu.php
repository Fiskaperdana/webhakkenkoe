<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/juizDropDownMenu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.8.0.min.js"></script>	
		<script type="text/javascript" src="jquery/juizDropDownMenu-1.5.min.js"></script>
		<script type="text/javascript">
		$(function(){
			$("#dropdown").juizDropDownMenu({
				'showEffect' : 'fade',
				'hideEffect' : 'slide'
			});
		});
		</script>
</head>
<body>
<ul id="dropdown">

				<li><a href="admin.php">Home</a></li>
				<li><a href="#rea">Pengaturan</a>
					<ul>
						<li><a href="kategori.php">Kategori</a></li>
						<li>
							<a href="produk.php">Produk</a>
					  </li>
						<li><a href="#">Admin</a></li>
                  </ul>
				<li><a href="#">Laporan Transaksi</a></li>
				<li><a href="logout.php">Logout</a></li></ul>

</body>
</html>