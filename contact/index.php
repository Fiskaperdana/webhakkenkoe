<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../css/satu.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/home/juizDropDownMenu.css"/>
<link rel="stylesheet" type="text/css" href="css/formkontak.css"/>
<link rel="stylesheet" type="text/css" href="../css/home/infrmasi.css"/>
<script type="text/javascript" src="../jquery/jquery-1.7.1.min.js"></script>	
		
		<script type="text/javascript" src="../jquery/home/juizDropDownMenu-1.5.min.js"></script>
		<script type="text/javascript">
		$(function(){
			$("#dropdown").juizDropDownMenu({
				'showEffect' : 'fade',
				'hideEffect' : 'slide'
			});
		});
		</script>
		
		<script type="text/javascript">
		$(document).ready(function() {
		$("ul.gallery li").hover(function() { //On hover...
			var thumbOver = $(this).find("img").attr("src"); //Get image url and assign it to 'thumbOver'
		//Set a background image(thumbOver) on the &lt;a&gt; tag 
			$(this).find("a.thumb").css({'background' : 'url(' + thumbOver + ') no-repeat center bottom'});
		//Fade the image to 0 
		$(this).find("span").stop().fadeTo('normal', 0 , function() {
			$(this).hide() //Hide the image after fade
			}); 
		} , function() { //on hover out...
		//Fade the image to 1 
		$(this).find("span").stop().fadeTo('normal', 1).show();
			});
		});
		</script>

		<script type="text/javascript">
 		$(document).ready(function() {
        pageUnits = 'px';
        colUnits = 'px';
        pagewidth = 960;
        columns = 6;
        columnwidth = 140;
        gutterwidth = 24;
        pagetopmargin = 35;
        rowheight = 20;
        gridonload = 'off';
        makehugrid();
        setgridonload();
 		});
		</script>
</head>
<body>
<div class="all" align="center">
<div class="header">
	<div>
	<img src="../images/header.png" />
	</div>
</div>
<div class="menu">
	<div>
	<ul id="dropdown">
				<li><a href="../index.php">Home</a></li>
				<li><a href="../profile/profil.php">Profile</a>
					<ul>
		        <li><a href="#print">Print</a></li>
						<li><a href="#web">Web</a>
							<ul>
								<li><a href="#analyzes">Analyzes</a></li>
								<li><a href="#ux">UX</a></li>
								<li><a href="#submenu">Submenu</a></li>
								<li><a href="#ssmenu">Sub-sub-menu</a></li>
							</ul>
						</li>
						<li><a href="#marketing">Marketing</a></li>
						<li><a href="#ref">SEO</a></li>
						<li><a href="#access">Accessibility</a>
							<ul>
								<li><a href="#analyzes">Analyzes</a></li>
								<li><a href="#ux">UX</a></li>
								<li><a href="#submenu">Submenu</a></li>
								<li><a href="#ssmenu">Sub-sub-menu</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#comp">About</a>
					<ul>
						<li><a href="#who">Who we are</a></li>
						<li><a href="#what">Our competences</a></li>
						<li><a href="#ref">Our references</a></li>
					</ul>
				</li>
				<li><a href="contact.php">Contact us</a></li>
                
			</ul>
			</div>
</div>
<div class="content">
<div class="contents" id="page-wrap">
		<form id="myform" method="post" action="contact_submit.php">
			<div>
			<div class="field">
				<label for="nama" >Name</label>
				<input class="inputfield textfield" name="nama" type="text"/>
			</div>
			<div class="field">
				<label for="email" >E-mail</label>
				<input class="inputfield textfield" name="email" type="text"/>
			</div>
			<div class="field">
				<label for="notelp" >Telephone Number</label>
				<input class="inputfield textfield" name="notelp" type="text" maxlength="12"/>
			</div>
			<div class="field area">
				<label for="isi" >Your Message</label>
				<textarea class="inputfield textarea1" name="isi"></textarea>
			</div>
			</div>
			<!--div class="clear"></div-->
            <div align="center">
			<input class="submitbutton" type="submit" value="Submit" name="submit"/>
            <input class="submitbutton" type="reset" value="Reset" name="reset"/>
			</div>

		</form>
<script type="text/javascript" src="jquery/highlight.js"></script>
	
</div>
</div>
<div class="footer">
Copyright &copy; 2012 By Hakkenkoe | Bandung, Indonesia
</div>
<div id="footer" align="center">			
<table border="0"><tr><td><div align="center">
		<ul class="footer-links">				
				
				<li><a href="/pages/frequently-asked-questions">FAQ</a></li>
				
				<li><a href="/pages/about-us">About Us</a></li>

				
				<li><a href="/pages/shipping">Shipping Information</a></li>
				
				<li><a href="/pages/return-policy">Return Policy</a></li>
				
				<li><a href="/pages/sizing">Sizing</a></li>
				
				<li><a href="/pages/contact-us">Contact</a></li>
				
				<li><a href="/pages/press">Press</a></li>
				
				<li><a href="/blogs/news">Blog</a></li>

				
				<li><a href="/pages/gift-certificates">Gift Certificates</a></li>
				
			</ul>
</div></td></tr>

<tr><td>
<div align="center">
<p style="font-family:'Tw Cen MT'">Copyright &copy; Hakkenkoe 2012 | Bandung, Indonesia</p>
<div>
  <ul class="creditcards">
		          

		          
		          <li></li>
 </ul>
 <ul class="socialmedia">
			
                        
			<li><a href="http://twitter.com/redvelvetshop"><img src="../images/facebook_active.png?3" alt="" width="30px" /></a></li>
			
			
			<li><a href="http://www.facebook.com/pages/Red-Velvet-Shop/148165501885246"><img src="../images/twitter_active.png?3" width="30px" alt="" /></a></li>
			
                      
			
		</ul>
		


</div></div></td></tr></table></div></div></div>
</body>
</html>