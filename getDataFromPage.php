<?php
header("Allow-Cross-Origin-Access: *");
$url = $_GET["url"];
if(get_headers($url)[0] == "HTTP/1.0 404 Not Found") {
	echo "Invalid page";
} else {
	$html = file_get_contents($url);
	echo $html;
}
?>
