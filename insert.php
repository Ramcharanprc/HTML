<?php

	$connection = mysqli_connect('localhost','usr','pwd','dbRam');
	$itemId = $_REQUEST["itemId"];
	$description = $_REQUEST["description"];
	$stockQuantity = $_REQUEST["stockQuantity"];
	$itemPrice = $_REQUEST["itemPrice"];

	$update = "update Item set description = '" . $description . "', stockQuantity = " . $stockQuantity . ", itemPrice = " . $itemPrice . " where itemId = '" . $itemId ."'";
	$result1 = mysqli_query($connection, $update);
	if(mysqli_affected_rows($connection) == 0)
	{
		$insert = "insert into Item values('".$itemId ."', '". $description ."', '" . $stockQuantity . "', ". $itemPrice .", '5003', 20, 100, 0)"; 
		$result2 = mysqli_query($connection, $insert);
		echo "Inserted";
	}
	else
	{

		echo "Updated successfully";
	}


	// mysqli_query($db, $query);
	// echo "Record added successfully.";
	mysqli_close($db); 
?>

