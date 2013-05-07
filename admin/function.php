<? function AMAN()
{ $admin=$_SESSION['admin'];
if($admin=='1') { return True;}
else { return False;}
}

function masuk($username, $password) {
	if($username=='hakkenkoe'&& $password=='hakkenkoe123')
	{
		$_SESSION['admin']=1;
		$_SESSION['username']=$username;
		AMAN();
	}
}
?>