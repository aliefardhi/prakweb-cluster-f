<!DOCTYPE html>
<html>
<head>
	<title>foreach</title>
</head>
<body>
	<?php 
		$nama = array(
			1=>"bagus", 
			6=>"budi", 
			12=>"setiawan",
			45=>"suva",
			55=>"rahadiyan");

		foreach ($nama as $key => $isi) {
			echo "Urutan ke-$key adalah $isi";
			echo "<br/>";
		}

	 ?>
</body>
</html>