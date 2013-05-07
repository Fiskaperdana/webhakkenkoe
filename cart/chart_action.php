<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$dtbase="webhakkenkoe";

//koneksi ke database
mysql_connect($host,$user,$pass);
mysql_select_db($dtbase);

require_once ('chart.inc.php');

if(isset($_POST['aksi'])) {
	/* menambahkan kode pesan dan detail pesan kedalam database*/
	$kd_transaksi = kd_transaksi();

	$total_bayar = $_SESSION['totalbayar'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	insertToDB($kd_transaksi, $nama, $alamat, $total_bayar);
	$_SESSION['cart'] = '';
	//check if query successful
session_destroy();
$link="location:../shop.php?mod=chart&pg=finish&total_bayar=$total_bayar&kd_transaksi=$kd_transaksi";
		header($link);

	mysql_close();
}
?>
