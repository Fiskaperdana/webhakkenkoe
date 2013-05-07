<?


// Start the session
session_start();

// Process actions
$chart = $_SESSION['chart'];
$action = $_GET['action'];
switch ($action) {
	case 'add' :
		if ($chart) {
			$chart .= ',' . $_GET['id'];
		} else {
			$chart = $_GET['id'];
		}
		break;
		//
		//B002,5,S,B003,10,M
	case 'delete' :
		if ($chart) {
			$items = explode(',', $chart);
			$newchart = '';
			foreach ($items as $item) {
				if ($_GET['id'] != $item) {
					if ($newchart != '') {
						$newchart .= ',' . $item;
					} else {
						$newchart = $item;
					}
				}
			}
			$chart = $newchart;
		}
		break;
	case 'update' :
		if ($chart) {
			$newchart = '';
			foreach ($_POST as $key => $value) {
				if (stristr($key, 'qty')) {
					$id = str_replace('qty', '', $key);
					$items = ($newchart != '') ? explode(',', $newchart) : explode(',', $chart);
					$newchart = '';
					foreach ($items as $item) {
						if ($id != $item) {
							if ($newchart != '') {
								$newchart .= ',' . $item;
							} else {
								$newchart = $item;
							}
						}
					}
					for ($i = 1; $i <= $value; $i++) {
						if ($newchart != '') {
							$newchart .= ',' . $id;
						} else {
							$newchart = $id;
						}
					}
				}
			}
		}

		$chart = $newchart;
		break;
}
$_SESSION['chart'] = $chart;
?>



<div id="contents">
	<? echo writeShoppingchart();?>
	<?php
	echo showchart();
	?>

<form  class="form-horizontal" method="POST" id="form1" action="chart/chart_action.php">
	<legend>
		Input pembeli
	</legend>

	<div class="control-group">
		<label class="control-label" for="nama">Nama</label>
		<div class="controls">
			<input type="text" name='nama'
		 >
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="alamat">Alamat</label>
		<div class="controls">
			<input type="text" name='alamat'
			 >
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-success" name='aksi' >
			Kirim
			</button>
		</div>
	</div>
</form>
</div>
<?
if(isset($_GET['s'])) {
	if($_GET['status'] == OK) {
		echo " proses pembelian berhail dilakukan sudah selesai";
	} else {
		echo "operasi gagal";
	}
}