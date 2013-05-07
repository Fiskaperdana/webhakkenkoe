<div class="row">
	<ul class='thumbnails'>
		<?php
				//bata paging 
				require_once('inc/config.php');
	
		
$query="SELECT * from produk order by idproduk desc";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){


		?>
		<li class="span3">
			<div class="thumbnail pagination-centered">
				<h4><a href="#"><?=$rows -> merek;?>&nbsp;<?=$rows -> nama;?></a></h4>
				<hr class="lessspace" />
				<img src="image/<?=$rows->foto?>" alt=""/>
				<p>
					<a class="btn btn-large btn-block btn-primary" href="index.php?mod=chart&pg=chart&action=add&id=<?=$rows->idproduk?>"><i class="icon-shopping-cart icon-white"></i> Harga Rp.<?=$rows -> harga;?>,00 </a>
				</p>
			</div>
		</li>
		<?
$no++;
}?>
</div>