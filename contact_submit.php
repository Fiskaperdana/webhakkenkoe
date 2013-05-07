<?
include('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/satu.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/menunya.css"/>
<link rel="stylesheet" type="text/css" href="css/formkontak.css"/>
<link rel="stylesheet" type="text/css" href="css/footer.css"/>
<script type="text/javascript" src="jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery/jquery-hover-effect.js"></script>
<script type="text/javascript">
//Image Hover
jQuery(document).ready(function(){
jQuery(function() {
	jQuery('ul.da-thumbs > li').hoverdir();
});
});
</script>
</head>
<body>
<div class="all" align="center">
		<div id="menu_div">
			<div id="navigasi">
				<div id="menu">
					<ul id="nav">
						<li><a href="index.php">Home</a></li>
						<!-- END Home Item -->
						
						<li><a href="profil.php">Profile</a></li>
						<!-- END Profile Item -->
						
						<li><a href="list_produk.php">Shop</a></li>
						<!-- END Shop Item -->
						<li><a href="contact.php">Contact Us</a></li>
					</ul><!-- #nav END-->
					
					<!-- Search Form -->
					<form class="searchform" action="#"> 
						<input class="searchfield" type="text" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
					</form>
					<!-- / Search Form -->
					 
				</div><!-- #menu END-->
			</div><!-- #navigasi END-->
		</div><!-- #menu_div END-->
		<!--=====================================
				/Top Fixed navigasi Menu END 
		======================================-->
<div class="header">
	<div>
	<img src="images/header.png" />
	</div>
</div>
<div>
<?
$idkontak=$_POST['idkontak'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$telp=$_POST['notelp'];
$isi=$_POST['isi'];
$waktu=date('Y-m-d');


//perintah sql utk pemasukkan data ke tabel kontak
$sql="INSERT INTO kontak (idkontak, namakontak, emailkontak, telpkontak, isikontak, waktu) VALUES('$idkontak', '$nama', '$email', '$telp', '$isi', '$waktu')";
$hasil=mysql_query($sql);
if ($hasil)
	echo "<p><center>Terimakasih $nama :)</b>.";
else
	echo "<p>Maaf sedang dalam perbaikan.";
?><br />
</div>
<div id="stiki_footer">
  <ul id="footer_menu">
    <!-- Begin Footer Menu -->
    <li class="imgmenu"><a href="#"><span>Home</span></a></li>
    <!-- This Item is an Image, the "span" is hidden via CSS -->
    <li><a href="#">Services</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">Friends</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Testimonials</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
  
  <ul id="copyright">
  <li>Copyright &copy; 2012 By Hakkenkoe | Bandung, Indonesia</li>
  </ul>
  <!-- End Social Icons -->
  <ul id="social_icons">
    <!-- Social Icons -->
    <!-- The span is the text appearing on hover, use the tooltip class in the link -->
    <li><a href="" ><img src="images/twitter.png" alt="" /><span>Twitter</span></a></li>
    <li><a href="" ><img src="images/facebook.png" alt="" /><span>Facebook</span></a></li>

  </ul>
  
</div>
</div>
</body>
</html>