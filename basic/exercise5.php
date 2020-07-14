<!DOCTYPE html>
<html lang="en">
<head>
	<title>exercise5</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<?php

		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "exercise";

		$conn = mysqli_connect($host, $user, $pw, $db);

		$sql = "CREATE TABLE a_table(
				ID int(6) AUTO_INCREMENT PRIMARY KEY,
				firstname VARCHAR(20) NOT NULL,
				lastname VARCHAR(20) NOT NULL,
				day TIMESTAMP)";

		if(mysqli_query($conn, $sql))
		{
			echo "jesss!";
		}
		else
			echo "ups...";


	?>

</body>
</html>