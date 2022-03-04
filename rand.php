<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		$sup = rand(5,10);
		$array = [];
		for($i=0; $i<$sup; $i++){
			$array[$i] = rand(0,100);
		}
		sort($array);
		echo '<pre>';
		print_r($array);
		echo '</pre>';
	 ?>
</body>
</html>