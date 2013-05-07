<div class="span6">
	<table class="table table-striped ">
		<thead>
			<tr>
				<td>No</td>
				<th>Merek</th>
				<th>Seri</th>
					
				<th>harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
$query=" SELECT * from  produk ";

$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){
			?>
			<tr>
				<td><?=$no;?></td>
				<td><?=$rows -> nama;?></td>
				<td><?=$rows -> merek;?></td>
				<td><span class="label label-success">Rp. <?=$rows -> harga;?>,00</span></td>
				<td><a href="index.php?mod=chart&pg=chart&action=add&id=<?=$rows->idproduk?>" class=btn > <i class='icon-shopping-cart'></i>beli</a></td>
			</tr>
			<?
$no++;
}?>
		</tbody>
	</table>
</div>