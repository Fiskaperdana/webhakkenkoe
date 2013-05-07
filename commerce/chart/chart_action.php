<?php
session_start();
require_once ('../inc/config.php');

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
$link="location:../index.php?mod=chart&pg=finish&total_bayar=$total_bayar&kd_transaksi=$kd_transaksi";
		header($link);

	mysql_close();
}
?>
