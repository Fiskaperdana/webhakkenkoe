<?php
//error_reporting(0); hilangkan tampilan eror


mysql_connect("localhost","root","");
mysql_select_db("webhakkenkoe");

$username = $_POST['username'];
$password = md5($_POST['password']);

$query=("select * from admin where username='".$username."' and password='".$password."'");
$login = mysql_query($query);
$ketemu = mysql_num_rows($login);
$r = mysql_fetch_array ($login);

//apabila user pass dtemukan
if($ketemu >= 1){
	session_start();
	//session_register("username");
	//session_register("realname");
	//session_register("password");
	
	$_SESSION['username'] = $r['username'];
	$_SESSION['realname'] = $r['realname'];
	$_SESSION['password'] = $r['password'];
	
	//diarahin ke admin.php

	header('location:admin.php');
}
//jika user pass tdk dtemukan

else{
	echo"<center>Maaf Anda gagal masuk sebagai admin.<br> Username atau Password yang diinputkan salah.</br>";
	echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}
?>
