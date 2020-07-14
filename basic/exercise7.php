<!DOCTYPE html>
<html lang="en">
<head>
	<title>exercise7</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<form method="post">
		<input type="text" name="firstname" placeholder="first name">
		<input type="text" name="lastname" placeholder="last name">
		<input type="submit" name="submit" value="submit">
	</form>

	<?php

		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "exercise";

		$conn = mysqli_connect($host, $user, $pw, $db);

		$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
		$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);

		$sql = "INSERT INTO a_table (firstname, lastname)
				VALUES ('$first_name','$last_name')";

		if(mysqli_query($conn, $sql))
		{
			echo "hey!";
		}
		else
			echo "ups...";


	?>

</body>
</html>