<!DOCTYPE html>
<html lang="en">
<head>
	<title>exercise9</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<form method="post" accept-charset="utf-8">
		<input type="text" name="firstname" placeholder="first name">
		<input type="text" name="lastname" placeholder="last name">
		<input type="submit" name="update" value="update">
	</form>	

	<?php

		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "exercise";

		$conn = mysqli_connect($host, $user, $pw, $db);

		// $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
		// $last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
		// $id= mysqli_real_escape_string($conn, $_POST['ID']);

		// $sql = "SELECT * FROM a_table";

		$sql = "UPDATE a_table SET firstname = '$first_name' WHERE id ='$id'" ;

		// $sql = "UPDATE Users SET lastname='Johny' WHERE id=2" ;

		$result = mysqli_query($conn, $sql);

		// $row = $result->fetch_assoc();

		if(isset($_POST['update']))
		{
    		$first_value = mysqli_real_escape_string($db, $_POST['firstname']);
    		$second_value = mysqli_real_escape_string($db, $_POST['lastname']);

    		$add_val = "UPDATE a_table SET firstname='$first_value' WHERE lastname='$second_value'";
    		$saved = mysqli_query($db, $add_val);

    		if($saved) 
    		{
        		echo "Success";
    		} 
    		else 
    		{
        		echo "Error";
    		}
		}

		// if($result->num_rows == 0)
		// {
		// 	echo "no result :( ";
		// }
		// elseif ($result->num_rows == 1) 
		// {
		// 	$row = $result->fetch_assoc();
		// 	echo $row['firstname'] . " ". $row['lastname'];
		// }
		// else
		// {
		// 	$row = $result->fetch_all(MYSQLI_ASSOC);
		// 	foreach ($row as $value) {
		// 		echo $value['firstname'] . " " . $value['lastname'] . "<br>";
		// 	}
		// }
		
		// else
		// {
		// 	$row = $result->fetch_all(MYSQLI_ASSOC);
		// 	foreach ($row as $value) {
		// 		echo $value['firstname'] . " " . $value['lastname'] . "<br>";
		// 	}
		// }
		


		// if(mysqli_query($result))
		// {
		// 	echo "supiii!";
		// }
		// else
		// 	echo "ups...";


	?>

</body>
</html>