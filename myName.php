<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Name</title>
</head>
<body>
	<?php 
		echo '<script>console.log("Hi Ram")</script>';
		echo $_SESSION["key"];
		$_SESSION["key"]++;
	?>
</body>
</html>
