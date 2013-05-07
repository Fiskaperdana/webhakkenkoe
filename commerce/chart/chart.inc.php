<?php
session_start();
function query($qry) {
	$result = mysql_query($qry) or die("Gagal melakukan query pada :
	 <br>$qry<br><br>Kode Salah : <br>&nbsp;&nbsp;&nbsp;" . mysql_error() . "!");
	return $result;
}

function fetch_row($qry) {
	$tmp = query($qry);
	list($result) = mysql_fetch_row($tmp);
	return $result;
}
function kd_transaksi() {
	$kode_temp = fetch_row("SELECT kd_transaksi FROM transaksi ORDER BY kd_transaksi DESC LIMIT 0,1");
	if ($kode_temp == '')
		$kode = "T00001";
	else {
		$jum = substr($kode_temp, 1, 6);
		$jum++;
		if ($jum <= 9)
			$kode = "T0000" . $jum;
		elseif ($jum <= 99)
			$kode = "T000" . $jum;
		elseif ($jum <= 999)
			$kode = "T00" . $jum;
		elseif ($jum <= 9999)
			$kode = "T0" . $jum;
		elseif ($jum <= 99999)
			$kode = "T" . $jum;
		else
			die("Kode pemesanan melebihi batas");
	}
	return $kode;
}
function writeShoppingchart() {
	$chart = $_SESSION['chart'];
	if(!$chart) {
		return '<p>Anda belum membeli apapun</p>';
	} else {
		// Parse the chart session variable
		$items = explode(',', $chart);
		$s = (count($items) > 1) ? 's' : '';
		return '<h3>Ada <a href="index.php?mod=chart&pg=chart">' . count($items) . ' barang' . $s . ' di chart</a></h3>';
	}
}

function chartNotification() {
	$chart = $_SESSION['chart'];
	if(!$chart) {
		return '0';
	} else {
		// Parse the chart session variable
		$items = explode(',', $chart);
		
		return  count($items);
	}
}
function getQty() {
	$chart = $_SESSION['chart'];
	if(!$chart) {
		return 0;
	} else {
		// Parse the chart session variable
		$items = explode(',', $chart);
		$s = (count($items) > 1) ? 's' : '';
		return count($items);
	}
}

function showchart() {

	$chart = $_SESSION['chart'];
	print_r($chart);
	if($chart) {
		$items = explode(',', $chart);
		$contents = array();
		foreach($items as $item) {
			$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
		}
		$output[] = "<table class=\"table table-striped \">";
		$output[] = "<th><td>Nama</td><td> Harga</td><td>jumlah</td><td>subtotal</td><td>Aksi</td></th>";
		$output[] = '<form action="index.php?mod=chart&pg=chart&action=update" method="post" id="chart">';
$no=1;
		foreach($contents as $id => $qty) {
			$sql = "SELECT * from produk WHERE idproduk = '$id'";
			$result = mysql_query($sql);
			$row = mysql_fetch_object($result);
				$output[] = '<tr><td>' . $no . '</td>';
			$output[] = '<td>' . $row -> nama . '</td>';
			$output[] = '<td>Rp.' . $row -> harga . '</td>';
			$output[] = '<td><input type="text" class="input-mini" name="qty' . $id . '" value="' . $qty . '"  /></td>';

			$output[] = '<td>Rp.' . ($row -> harga * $qty) . '</td>';
			$total += $row -> harga * $qty;

			$output[] = '<td><a href="index.php?mod=chart&pg=chart&action=delete&id=' . $id . '" class="btn btn-danger">Hapus</a></td></tr>';
$no++;
		}
		$output[] = "</table>";
		$qty = getQty();

		$output[] = '<p>total		: <strong> Rp.' . $total . '</strong></p>';

		$_SESSION['totalbayar'] = $total;
		$output[] = '<button type="submit">Update cart</button>';
		$output[] = '</form>';
	} else {
		$output[] = '<p>Keranjang belanja masih kosong.</p>';
	}
	return join('', $output);
}

function insertToDB($kd_transaksi,$nama,$alamat,$total_bayar) {

	$chart = $_SESSION['chart'];
	if($chart) {
		$items = explode(',', $chart);
		$contents = array();
		foreach($items as $item) {
			$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
		}

		$sql_transaksi = "insert into transaksi (kd_transaksi,tgl_transaksi,total_bayar,nama,alamat) 
		values( '$kd_transaksi', sysdate(),'$total_bayar','$nama','$alamat')";
		//echo "SQL transaksi:".$sql_transaksi;
		mysql_query($sql_transaksi) or die(mysql_error());
		foreach($contents as $id => $qty) {

			$sql = "insert into transaksi_detail(kd_transaksi,idproduk,jumlah)
			values('$kd_transaksi','$id','$qty')";
			//		echo "SQL transaksi:".$sql;
			$result = mysql_query($sql) or die(mysql_error());
		}
	} else {
		$output[] = '<p>Keranjang belanja masih kosong.</p>';
	}

}?>