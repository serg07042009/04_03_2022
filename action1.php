<?php
	if (isset($_POST["text"])) {
		$text=$_POST['text'];
	};
	if(isset($_POST["checkbox"])){
	    $checkbox = $_POST["checkbox"];
	};

	if (isset($_POST["radio"])) {
		$radio = $_POST["radio"];	
	};

	if (isset($_POST["select"])) {
		$select = $_POST["select"];
	};

	echo $text.' ';
	for($i = 0; $i<count($checkbox); $i++){
		echo "$checkbox[$i]";
	}
	echo ', '.$radio.', '.$select;
	?>