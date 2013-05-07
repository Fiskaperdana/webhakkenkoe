<?php

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
<link rel="stylesheet" type="text/css" href="css/satu.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/menunya.css"/>
<link rel="stylesheet" type="text/css" href="css/menureset.css"/>
<link rel="stylesheet" type="text/css" href="css/efekresponsive.css"/>
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
<div id="container" >
<div class="freshdesignweb">     
<!-- Portfolio 4 Column start -->
    <div class="image_grid portfolio_4col">
    <ul style="height: 495px;" id="list" class="portfolio_list da-thumbs">
    <li>
            <img src="images/home/bungatumpuk.jpg" alt="img">
            <article class="da-animate da-slideFromRight" style="display: block;">
          <h3>Flower</h3>
                <em>Bunga Tumpuk</em>
                <span class="link_post"><a href="#"></a></span>
                <span class="zoom"><a href="images/home/bungatumpuk.jpg"></a></span>
            </article>
        </li>
        <li>
            <img src="images/home/flower frill 2.jpg" alt="img">
            <article class="da-animate da-slideFromTop" style="display: block;">
            <h3>Flower Frill</h3>
                <em>Vintage</em>
                <span class="link_post"><a href="#"></a></span>
                <span class="zoom"><a href="images/home/flower frill 2.jpg"></a></span>
            </article>
        </li>
        <li>
            <img src="images/home/flower frill.jpg" alt="img">
            <article class="da-animate da-slideFromLeft" style="display: block;">
            <h3>Flower Frill</h3>
                <em>White</em>
                <span class="link_post"><a href="#"></a></span>
                <span class="zoom"><a href="images/home/flower frill.jpg"></a></span>
            </article>
        </li>
        <li>
            <img src="images/home/flower.jpg" alt="img">
            <article class="da-animate da-slideFromRight" style="display: block;">
            <h3>Flower</h3>
                <em>Colorful</em>
                <span class="link_post"><a href="#"></a></span>
                <span class="zoom"><a href="images/home/flower.jpg"></a></span>
            </article>
        </li>
        <li>
            <img src="images/home/necklace.jpg" alt="img">
            <article class="da-animate da-slideFromRight" style="display: block;">
            <h3>Necklace</h3>
                <em>Colorful Button</em>
                <span class="link_post"><a href="#"></a></span>
                <span class="zoom"><a href="images/home/necklace.jpg"></a></span>
            </article>
        </li>
        <li>
            <img src="images/home/orchid.jpg" alt="img">
            <article class="da-animate da-slideFromRight" style="display: block;">
            <h3>Flower</h3>
                <em>Orchid</em>
                <span class="link_post"><a href="#"></a></span>
                <span class="zoom"><a href="images/home/orchid.jpg"></a></span>
            </article>
        </li>
        <li>
            <img src="images/home/toy.jpg" alt="img">
            <article class="da-animate da-slideFromRight" style="display: block;">
            <h3>Toy</h3>
                <em>Cutes</em>
                <span class="link_post"><a href="#"></a></span>
                <span class="zoom"><a href="images/home/toy.jpg"></a></span>
            </article>
        </li>
        <li>
            <img src="images/home/keranjang.jpg" alt="img">
            <article class="da-animate da-slideFromLeft" style="display: block;">
            <h3>Flower</h3>
                <em>Basket</em>
                <span class="link_post"><a href="#"></a></span>
                <span class="zoom"><a href="images/home/keranjang.jpg"></a></span>
            </article>
        </li>
    </ul>
    </div>
    <!-- Portfolio 4 Column End -->
</div></div>
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