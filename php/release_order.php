<?php 

	require_once 'dbh.php';
	$publishers = $_POST['publisher'];
	foreach ($publishers as $variable) {
		echo "Publisher : "+$variable."<br>";
	}
	$ro_number = $_POST['ro_number'];
	echo "ro : ".$ro_number;

	$ro_date = $_POST['ro_date'];
	echo "date : ".$ro_date;

	$client_name = $_POST['client_name'];
	echo "Name : ".$client_name;

	$nature = $_POST['nature'];
	foreach ($nature as $var){
		echo "nature : ".$var."<br>";
	}

	$caption = $_POST['caption'];
	echo "caption : ".$caption;

	$sizeType = $_POST['unit'];
	if ($sizeType == "area") {
		$hieght = $_POST['hieght'];
		echo "hieght : ".$hieght;
		$width = $_POST['width'];
		echo "width : ".$width;

	}else if($sizeType == "lines"){
		$lines = $_POST['lines'];
		echo "Number of lines : ".$lines;
		$extra_lines = $_POST['extra_lines'];
		echo "Extra Number of lines : ".$extra_lines;

	}else{
		$words = $_POST['words'];
		echo "Number of Words : ".$words;
		$extra_words = $_POST['extra_words'];
		echo "Extra Number of words : ".$extra_words;
	}

	$init_cost = $_POST['init_cost'];
	echo "initial cost : ".$init_cost;

	$ext_cost = $_POST['ext_cost'];
	echo "Extra cost ".$ext_cost;
	

 ?>