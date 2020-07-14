<!DOCTYPE html>
<html lang="en">
<head>
	<title>exercise6</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<?php

		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "exercise";

		$conn = mysqli_connect($host, $user, $pw, $db);

		$sql = "INSERT INTO a_table (firstname,lastname)
				VALUES ('mietzi','maus'),('justus','rüpel')";

		if(mysqli_query($conn, $sql))
		{
			echo "yippyyy!";
		}
		else
			echo "ups...";


	?>

</body>
</html>