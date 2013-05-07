<?php include 'session.php'; ?>
<?php include 'koneksi.php'; ?>
<?php include 'header.php';?>
<?php include 'menu.php';?>
<?php
$id_produk=$_GET['id_produk'];

	$sql= "DELETE FROM produk where id_produk='$id_produk'";
	$hasil=mysql_query($sql);
	
	if($hasil){
	echo "<center>Data berhasil dihapus.<meta http-equiv='refresh' content='1; url=produk.php'>";
	}else{
	echo"Data gagal dihapus.<meta http-equiv='refresh' content='1; url=produk.php'>";
}
?>
<?php include'footer.php'; ?>

</div>
</body>
</html>
