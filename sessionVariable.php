<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$_SESSION["key"] = 1;
		// echo "<script>alert(" . $_SESSION["key"] . ")</script>";
		// $_SESSION["key"]++;
	?>
</body>
</html>