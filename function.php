<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		function first(){
			return "First function";
		}
		function second(){
			return "Second function";
		}
		$newFunction = rand(0, 1) ? 'first' : 'second';
		echo "$newFunction";
	?>
</body>
</html>