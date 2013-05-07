<?php
  session_start();      //memulai session
  if (!isset($_SESSION['username'])){
	die("Access denied!");
	};
  session_destroy();     //mengakhiri session
  	echo "<center>Terima kasih <strong>$_SESSION[realname]</strong>, Anda telah sukses LOGOUT";
	echo "<meta http-equiv='refresh' content='2; url=index.php'>"
?>