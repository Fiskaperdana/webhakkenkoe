<?php include 'session.php'; ?>
<?php include 'koneksi.php'; ?>
<?php include 'header.php';?>
<?php include 'menu.php';?>

<?php
$id_ktgproduk=$_GET['id_ktgproduk'];

	$sql= "DELETE FROM ktgproduk where id_ktgproduk='$id_ktgproduk'";
	$hasil=mysql_query($sql);
	
	if($hasil){
	echo "<center>Data berhasil dihapus.<meta http-equiv='refresh' content='1; url=kategori.php'>";
	}else{
	echo"<center>Data gagal dihapus.<meta http-equiv='refresh' content='1; url=kategori.php'>";
}
?>
<?php include'footer.php'; ?>

</body>
</html>