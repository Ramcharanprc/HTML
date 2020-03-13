<?php

	$connection = mysqli_connect('localhost','usr','pwd','dbRam');
	$itemId = $_REQUEST["itemId"];

	$update = "update Item set status = 1 where itemId = '" . $itemId ."'";
	$result1 = mysqli_query($connection, $update);
	echo "Deleted Successfully";

	mysqli_close($db); 
?>