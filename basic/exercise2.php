<!DOCTYPE html>
<html lang="en">
<head>
	<title>exercise1</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<form method="post">
		<input type="text" name="first_name" placeholder="first name">
		<input type="text" name="last_name" placeholder="last name">
		<input type="submit" name="submit" value="submit">
	</form>

	<?php  
		if(isset($_POST['submit']))
		{
			if($_POST['first_name'] && $_POST['last_name'])
			{
				echo "Hello " . $_POST['first_name'] . " " . $_POST['last_name'];
			}
			elseif ($_POST['first_name'] && !$_POST['last_name']) {
				echo "Dear " . $_POST['first_name'] . ", please fill out your last name. thanks." ;
			}
			elseif (!$_POST['first_name'] && $_POST['last_name']) {
				echo "Dear " . $_POST['last_name'] . ", please fill out your first name. thanks." ;
			}
		}
	?>

</body>
</html>