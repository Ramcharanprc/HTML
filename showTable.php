<!-- Get details from database and pass the deatils HTML. -->
<?php
	require_once("connection.php");
	$servername = "localhost";
	$username = "usr";
	$password = "pwd";
	$dbname = "dbRam";

	// $conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "SELECT *, " . "'</td><td><button type=button onclick=editDetails(this)>Edit</button><button onclick=deleteDetails(this)>Delete</button></td></tr>'"." htmlCode FROM Item where status = 0";
	$result = mysqli_query($connection, $sql);
	$table = "<tr><th>Item Id</th><th>Description</th><th>Stock Quantity</th><th>Item Price</th><th colspan=2 >Action</th></tr>";

	if (mysqli_num_rows($result) > 0) 
	{
	    while($row = mysqli_fetch_assoc($result))
	    {
	    	$table = $table . "<tr><td>". $row["ItemId"] . "</td><td>" . $row["Description"] . "</td><td>" . $row["StockQuantity"] . "</td><td>" . $row["ItemPrice"] . $row['htmlCode'];
	        
	    }
	    echo $table;
	}
	else 
	{
	    echo "0 results";
	}
?>