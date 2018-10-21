<?php
$file = fopen("dictionary.txt", "w");
$words = $_POST["words"];
foreach($words as $val) {
	fwrite($file, $val . "\n");
}
fclose($file);
echo count($words); 
?>
