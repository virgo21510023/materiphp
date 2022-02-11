<?php
	function perkalian($angka1, $angka2){
		return $hasil = $angka1 * $angka2;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>perkalian</title>
</head>
<body>
<h1>
	<?php
		$hasil = perkalian(20, 3);
		echo "perkalian 20 * 3 adalah $hasil";	
		echo "<br>";
		echo "perkalian 9 * 2 adalah ". perkalian(9,2);	
	?>
</h1>
</body>
</html>