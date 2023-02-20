<!DOCTYPE html>
<html>
	<body>
	<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
			
				$servername = "192.168.150.213";
				$username = "webprogmi212";
				$password = "b3ntRhino98";
				$dbname = "webprogmi212";
			}
				// Create connection
				$con = new mysqli($servername, $username, $password, $dbname);
				// Check connection
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
			$sql = "INSERT INTO jcuyugan_Stars VALUES (NULL, '$name', '$email', '$website', '$comment', '$gender', current_timestamp())";
			
			if(mysqli_query($con, $sql)){
				echo "<script> location.href='../html/Feedback.php'; </script>";
        		exit;
			} else{
				echo "Failed to register star";
				mysqli_error($con);
			}
			// Close connection
			mysqli_close($con);
		
			?>
	</body>
</html>
