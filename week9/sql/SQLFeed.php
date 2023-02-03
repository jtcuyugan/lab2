<!DOCTYPE html>
<html>
	<body>
	<?php
	// database connection code
	$con = mysqli_connect('localhost', 'root', '','StarDB');
	if($con === false){
		die("ERROR: Could not connect. "
			. mysqli_connect_error());
	}

	// get the post records
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$website = $_REQUEST['website'];
	$comment = $_REQUEST['comment'];
	$gender = $_REQUEST['gender'];

	// database insert SQL code
	$sql = "INSERT INTO Stars VALUES ('0', '$name', '$email', '$website', '$comment', '$gender')";

	if(mysqli_query($con, $sql)){

	} else{
		mysqli_error($con);
	}

	// Close connection
	mysqli_close($con);
	?>
	</body>
</html>
