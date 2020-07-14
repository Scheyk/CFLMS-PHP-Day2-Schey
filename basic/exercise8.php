<!DOCTYPE html>
<html lang="en">
<head>
	<title>exercise8</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>	

	<?php

		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "exercise";

		$conn = mysqli_connect($host, $user, $pw, $db);

		$sql = "SELECT * FROM a_table";

		$result = mysqli_query($conn, $sql);

		if($result->num_rows == 0)
		{
			echo "no result :( ";
		}
		elseif ($result->num_rows == 1) 
		{
			$row = $result->fetch_assoc();
			echo $row['firstname'] . " ". $row['lastname'];
		}
		else
		{
			$row = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($row as $value) {
				echo $value['firstname'] . " " . $value['lastname'] . "<br>";
			}
		}

		// $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
		// $last_name = mysqli_real_escape_string($conn, $_POST['lastname']);

		// $sql = "SELECT firstname,lastName FROM a_table";
		// $result = mysqli_query($conn, $sql);
		// $row = mysqli_fetch_assoc($result);

		// if($result == 0)
		// {
		// 	echo "no datas";
		// }
		// elseif ($result == 1) {
		// 	echo $row . $first_name . " " . $last_name ;
		// }
		// else
		// 	echo mysqli_fetch_all($row);


		// if(mysqli_query($result))
		// {
		// 	echo "supiii!";
		// }
		// else
		// 	echo "ups...";


	?>

</body>
</html>