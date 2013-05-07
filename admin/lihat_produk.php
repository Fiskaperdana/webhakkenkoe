<?php include 'session.php'; ?>
<?php include 'koneksi.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/demo_table_jui.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css" />

<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" media="screen" />
<link href="css/namamenu.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#FFFFFF">
<!-- Save for Web Slices (all.psd) -->
<div id="all" align="center">

<?php include 'header.php';?>
<?php include 'menu.php'; ?>

<div>
<div class="namamenu">♥ Produk - Daftar Produk ♥
</div>
<div align="center">
	<table id="datatables" class="display">
    <thead>
			<tr>
				<th>ID Produk</th>
                <th>Kategori Produk</th>
                <th>Nama Produk</th>
                <th>Harga Satuan</th>
                <th>Harga Per Lusin</th>
                <th>Gambar Produk</th>
                <th>Waktu</th>
                <th></th>
                <th></th>
			</tr>
            </thead>
            <tbody>
                    <?php
					          $sql = mysql_query("SELECT * FROM produk ORDER BY id_produk");
					          $no = 1;
                    while ($r = mysql_fetch_array($sql)) {
				echo"
				<tr>	
            	<td>$no</td>
				<td>$r[nama_ktgproduk]</td>
                <td>$r[nama_produk]</td>
                <td>$r[hrg_satuan]</td>
                <td>$r[hrg_lusin]</td>
                <td>$r[gbr_produk]</td>
                <td>$r[waktu]</td>
				<td>Edit</td>
				<td>Hapus</td>
			</tr>";
			$no++;
			}
			?>
</tbody>        
</table>
        <script src="jquery/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $('#datatables').dataTable({
					     "oLanguage": {
						      "sLengthMenu": "Tampilkan _MENU_ data per halaman",
						      "sSearch": "Pencarian: ", 
						      "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
						      "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
						      "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
						      "sInfoFiltered": "(di filter dari _MAX_ total data)",
						      "oPaginate": {
						          "sFirst": "<<",
						          "sLast": ">>", 
						          "sPrevious": "<", 
						          "sNext": ">"
					       }
				      },
              "sPaginationType":"full_numbers",
              "bJQueryUI":true
            });
          })    
        </script>

</div>
<div>
<div class="lihat">
<a href="produk.php">Tambah Produk</a>
</div>
</div>

<?php include'footer.php'; ?>

</div>
</body>
</html>