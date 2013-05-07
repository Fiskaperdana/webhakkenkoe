<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/satu.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/menunya.css"/>
<link rel="stylesheet" type="text/css" href="css/menureset.css"/>
<link rel="stylesheet" type="text/css" href="css/efekresponsive.css"/>
<link rel="stylesheet" type="text/css" href="css/form.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/footer.css"/>
<script type="text/javascript" src="jquery/jquery-v1.7.1.js"></script>
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
						
						<li><a href="#">Shop</a></li>
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
<div id="container" >
<?php

$host="localhost";
$user="root";
$pass="";
$dtbase="webhakkenkoe";

//koneksi ke database
mysql_connect($host,$user,$pass);
mysql_select_db($dtbase);
?>
//menampilkan 12 produk terbaru

<div class='boxform'>
<a href='#form-box' class='form-window namatambah'><img src='images/$data[gbr_produk].jpg' align='left' height='150' />Nama Produk</a>
</div>
<div id='form-box' class='form-popup'  align='center'>
<?php
$sql0=mysql_query("SELECT TOP 12 * FROM produk order by id_produk ASC");
while($data=mysql_fetch_array($sql0)){
echo"
      <form method='post' class='add' action='cart.php'>
<fieldset class='textbox'>
        	<label>
            <span>Kategori :</span>
			<input id='nama_ktgpoduk' type='text' name='nama_ktgproduk' value='$data[nama_ktgproduk]'/>
			</select></label>
        	<label>
            <span>Nama Produk :</span>
            <input id='nama_produk' type='text' name='nama_produk' value='$data[nama_produk]'/>
            </label>
        	<label>
            <span>Harga Satuan :</span>
            <input id='hrg_satuan' type='text' name='hrg_satuan' value='Rp $data[hrg_satuan] ,-'/>
            </label>
            <label>
            <span>Harga Per Lusin :</span>
            <input id='hrg_lusin'  type='text' name='hrg_lusin' value='Rp $data[hrg_lusin] ,-'/>
        	</label>
 
            <button class='button' type='submit' value='Cart' >Beli</button>
    </fieldset>
</form>";}?>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('a.form-window').click(function() {
                //Getting the variable's value from a link 
		var formBox = $(this).attr('href');
		//Fade in the Popup
		$(formBox).fadeIn(300);
		//Set the center alignment padding + border see css style
		var popMargTop = ($(formBox).height() + 24) / 2; 
		var popMargLeft = ($(formBox).width() + 24) / 2; 
		$(formBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		return false;
	});
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
	  $('#mask , .form-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
});
</script>

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
    <li><a href="#" ><img src="images/twitter.png" alt="" /><span>Twitter</span></a></li>
    <li><a href="#" ><img src="images/facebook.png" alt="" /><span>Facebook</span></a></li>

  </ul>
  
</div>
</body>
</html>
