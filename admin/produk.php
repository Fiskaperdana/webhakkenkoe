<?php include 'session.php'; ?>
<?php include 'koneksi.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>♥ Hakkenkoe™ | The Art of Handmade ♥</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/demo_table_jui.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css"/>
<link href="css/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" media="screen" />
<link href="css/namamenu.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#FFFFFF">
<!-- Save for Web Slices (all.psd) -->
<?php include 'header.php';?>
<?php include 'menu.php'; ?>
<div>
	<div class="namamenu">♥ Produk ♥</div>
</div>
<div class="boxform" align="center">
<a href="#form-box" class="form-window namatambah">Tambah Produk</a></div>
<div id="form-box" class="form-popup">
        <a href="#" class="close"><img src="../images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
      <form method="post" class="add" action="input_produk.php" enctype="multipart/form-data">
<fieldset class="textbox">
        	<label>
            <span>ID Kategori :</span>
            <select name='nama_ktgproduk'>
            <?php
			$sql="SELECT * from ktgproduk ORDER BY nama_ktgproduk ASC";
			$tampil=mysql_query($sql);
			
			while($r=mysql_fetch_array($tampil)){
				echo"<option value='$r[id_ktgproduk]'>$r[nama_ktgproduk]</option>";
			}
			?></select></label>
        	<label>
            <span>Nama Produk :</span>
            <input id="nama_produk" type="text" name="nama_produk"/>
            </label>
        	<label>
            <span>Harga Satuan :</span>
            <input id="hrg_satuan" type="text" name="hrg_satuan"/>
            </label>
            <label>
            <span>Harga Per Lusin :</span>
            <input id="hrg_lusin"  type="text" name="hrg_lusin"/>
        	</label>
            <label for="fupload">
            <span>Gambar :</span>
            <input id="fupload" type="file" name="fupload" size="78"/>
            </label>
 
            <button class="button" type="submit" value="Simpan" >Simpan</button>
            <button class="button" type="reset" value="Reset">Reset</button>
    </fieldset>
</form>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('a.form-window').click(function() {
                //Getting the variable's value from a link 
		var formBox = $(this).attr('href');
		//Fade in the Popup
		$(formBox).fadeIn(300);
		//Set the center alignment padding + border see css style
		var popMargTop = ($(formBox).height() + 24) / 2; 
		var popMargLeft = ($(formBox).width() + 24) / 2; 
		$(formBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		return false;
	});
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
	  $('#mask , .form-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
});
</script>

<div align="center">
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga Satuan</th>
                        <th>Harga Perlusin</th>
                        <th>Gambar</th>
                        <th>Waktu</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					
					          $sql = mysql_query("SELECT * FROM produk ORDER BY id_produk ASC");

					          $no = 1;
                    while ($r = mysql_fetch_array($sql)) {
                      echo "<tr>
                            <td width=40>$no</td>
                            <td>$r[nama_ktgproduk]</td>
                            <td>$r[nama_produk]</td>
                            <td>Rp $r[hrg_satuan],00</td>
                            <td>Rp $r[hrg_lusin],00</td>
                            <td><img src='images/$r[gbr_produk]' width=50></td>
                            <td>$r[waktu]</td>
							<td><a href='edit_produk.php?id_produk=$r[id_produk]' name='edit'>Edit</a>						
							</td>
							<td><a href='hapus_produk.php?id_produk=$r[id_produk]' name='hapus' value='Hapus'>Hapus</td>
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
<?php include'footer.php'; ?>
