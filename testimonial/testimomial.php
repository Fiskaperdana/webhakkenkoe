<?php

define('INCLUDE_CHECK',1);
require "functions.php";
require "connect.php";


// remove tweets older than 1 hour to prevent spam
mysql_query("DELETE FROM webhakkenkoe WHERE id>1 AND dt<SUBTIME(NOW(),'0 1:0:0')");
	
//fetch the timeline
$q = mysql_query("SELECT * FROM webhakkenkoe ORDER BY ID DESC");

$timeline='';
while($row=mysql_fetch_assoc($q))
{
	$timeline.=$formatTesti($row['testi'],$row['dt']);
}

// fetch the latest tweet
$lastTesti = '';
list($lastTesti) = mysql_fetch_array(mysql_query("SELECT testi FROM webhakkenkoe ORDER BY id DESC LIMIT 1"));

if(!$lastTesti) $lastTesti = "You don't have any testi yet!";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../css/satu.css" media="screen" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/testimonial.css" />
<script type="text/javascript" src="../jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="testimonial.js"></script>

</head>
<body>
<div class="all" align="center">
<div class="header">
<img src="../images/bg_header.png" />
</div>
<div class="menu">
	<ul id="nav">
                <li><a href="../index.php">Home</a></li>
				<li><a class="hsubs" href="#">Profile</a>
                    <ul class="subs">
                    	<li><a href="#">Hakkenkoe</a></li>
                    	<li><a href="#">Owner</a></li>
                  	</ul>
              	</li>
                <li><a class="hsubs" href="#">Shop</a>
                    <ul class="subs">
                        <li><a href="#">Brooch</a></li>
                        <li><a href="#">Necklace</a></li>
                        <li><a href="#">Submenu 2-3</a></li>
                    </ul>
                </li>
                <li><a class="hsubs" href="#">News</a>
                    <ul class="subs">
                        <li><a href="#">New Product</a></li>
                        <li><a href="#">Package</a></li>
                        <li><a href="#">Sale</a></li>
                    </ul>
                </li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="testimomial.php">Testimonial</a></li>
    </ul>
</div>
<div class="content">
<form id="Form" action="testimomial_submit.php" method="post">

<span class="counter">140</span>
<label for="inputField">What are you doing?</label>

<textarea name="inputField" id="inputField" tabindex="1" rows="2" cols="40"></textarea>
<input class="submitButton inact" name="submit" type="submit" value="update" disabled="disabled" />

<span class="latest"><strong>Latest: </strong><span id="lastTesti"><?=$lastTesti?></span></span>

<div class="clear"></div>

</form>

<h3 class="timeline">Timeline</h3>

<ul class="statuses"><?=$timeline?></ul>


</div>

</div>
<div class="footer">
<a><font color="#FFFFFF">Copyright &copy; 2012. Original Design by Rosalina</font></a>
</div>
</div>
</body>
</html>