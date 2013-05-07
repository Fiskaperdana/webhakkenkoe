<?php
$query=" SELECT * from  produk ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){
?>
<div class="row">
	<div class="span8">
		<div class="row">
			<div class="span8">
				<h4><strong><a href="#"><?=$rows -> nama;?></a></strong></h4>
			</div>
		</div>
		<div class="row">
			<div class="span2">
				<a href="#" class="thumbnail"> <img src="image/<?=$rows -> foto;?>" alt=""> </a>
			</div>
			<div class="span6">
				<p align='justify'>
					<?=$rows -> deskripsi;?>
				</p>
				<p><span class="label label-success"><i class="icon-star icon-white"></i><?=$rows -> nama_produk;?></span>&nbsp;
					<span class="label label-success">Harga:<i class="icon-chart"></i><?=$rows -> hrg_satuan;?></span><a href="shop.php?mod=chart&amp;pg=chart&amp;action=add&amp;id=<?=$rows->id_produk?>" class='btn' > <i class='icon-shopping-cart'></i>beli</a>
				</p>
			</div>
		</div>
	</div>
</div>
<?
}
?>