<!DOCTYPE html>
<html>
	<body>
	<?php
			// Code from: https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/
			// database connection code
			$con = mysqli_connect('localhost', 'webprogmi212', 'webprogmi212','webprogmi212');

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
			$sql = "INSERT INTO jtcuyugan_stars (id, name, email, website, comment, gender, reg_date) VALUES (NULL, '$name', '$email', '$website', '$comment', '$gender' , current_timestamp())";
			
			if(mysqli_query($con, $sql)){
				echo "<script> location.href='Feedback.php'; </script>";
        		exit;
			} else{
				echo "Failed to register Star";
				mysqli_error($con);
			}

			// Close connection
			mysqli_close($con);
			?>
	</body>
</html>
