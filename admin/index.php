<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="admin.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/footer.css" media="screen" />
<link href="css/header.css" rel="stylesheet" type="text/css" />
<body>
<?php include 'header.php';?>
<div>
<div class="header">
</div>
</div>
<div class="boxlogin" align="center">
<a href="#login-box" class="login-window"><img src="images/KLIK KLOGIN.png" /></a></div>
<div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="../images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
      <form method="post" class="signin" action="cek_login.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>Username</span>
                <input id="username" name="username" type="text">
                </label>
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" type="password">
                </label>
                <button class="submit button" type="submit" value="Login">Sign in</button>
                </fieldset>
          </form>
</div>
<script type="text/javascript" src="../jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('a.login-window').click(function() {
                //Getting the variable's value from a link 
		var loginBox = $(this).attr('href');
		//Fade in the Popup
		$(loginBox).fadeIn(300);
		//Set the center alignment padding + border see css style
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		$(loginBox).css({ 
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
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
});
</script>
</th>
</tr>
</table>
<?php include'footer.php'; ?>
