<?php include 'session.php'; ?>
<?php include 'koneksi.php'; ?>
<?php include 'header.php';?>
<?php include 'menu.php';?>
<?php
//tangkap var idktgproduk
$id_ktgproduk=$_GET['id_ktgproduk'];
//mngubah post pd form jd satuan var
$nama_ktgproduk=$_POST['nama_ktgproduk'];
$waktu=date('Y-m-d');//format waktu sekarang
//skrip ubh dta bdasar id yg ditangkap
$sql=mysql_query("UPDATE ktgproduk SET nama_ktgproduk='$nama_ktgproduk', waktu='$waktu' WHERE id_ktgproduk='$id_ktgproduk'");
if($sql){
echo"<center>Data $nama_ktgproduk berhasil di ubah.";
echo"<meta http-equiv='refresh' content='1; url=kategori.php'>";
}
else
{ echo"<center>Data gagal di ubah.";
echo"<meta http-equiv='refresh' content='2; url=kategori.php'>";
}
?>
<?php include'footer.php'; ?>
