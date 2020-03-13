<?php
	// $nameData = $_POST["userName"];
	// echo $nameData; 
	$servername = "localhost";
	$username = "usr";
	$password = "pwd";
	$dbname = "dbRam";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn)
	{
	    die("Connection failed: " . mysqli_connect_error());
	}
	$itemId = $_REQUEST['itemId'];
	$sql = "SELECT * FROM Item where ItemId like '". $itemId."%'";
	// echo "<script>console.log('$sql')</script>";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result))
	    {
	        echo "Item Id: " . $row["ItemId"]. "<br>Description: " . $row["Description"]. "<br>Item Price: " . $row["ItemPrice"]. "<br><br>";
	    }
	}
	else 
	{
	    echo "0 results";
	}

	mysqli_close($conn);
		$conn->close();
?>