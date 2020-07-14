<!DOCTYPE html>
<html lang="en">
<head>
	<title>exercise4</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<?php

		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "exercise";

		$conn = mysqli_connect($host, $user, $pw);

		$sql = "CREATE DATABASE $db";

		if(mysqli_query($conn, $sql))
		{
			echo "fetzt!";
		}
		else
			echo "ups...";


	?>

</body>
</html>