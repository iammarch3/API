<?php 

if (isset($_GET['script'])) {
	$script = $_GET['script'];


	if (!empty($script)) {
		echo 1;
	} else {
		echo 2;
	}
}

?>
