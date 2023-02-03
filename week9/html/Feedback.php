<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> [ FEEDBACK ] </title>
	<link rel="stylesheet" type="text/css" href = "../css/resources.css">
	<link rel="icon" type="image/x-icon" href="../images/wootteofeedback.ico">
</head>
<body>
<div id="navbar" id="top">
	<div id="pageselector">
		<center>
			<ul>
				<li id="buttons"><a href="../index.php" id="buttons">HOME</a></li>
				<li id="buttons"><a href="Leo.php" id="buttons">SUN</a></li>
				<li id="buttons"><a href="Gallery.php" id="logo"><img src="../images/wootteogallery.png" id="logo" padding="none"></img></a></li>
				<li id="buttons"><a href="Sagi.php" id="buttons">MOON</a></li>
				<li id="buttons"><a href="Libra.php" id="buttons">RISING</a></li>
			</ul>
		</center>
		<hr id="header">
	</div>
</div>

<br><br><br><br><br>
<div id="contents">
    <br>
		<center>
		<?php
			$nameErr = $emailErr = $genderErr = $websiteErr = "";
			$name = $email = $gender = $comment = $website = "";

			function test_input($data)
			{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "The Star must be named.";
			} else {
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
				$nameErr = "Only letters and white space allowed in this part of the galaxy.";
				}
			}
			
			if (empty($_POST["email"])) {
				$emailErr = "Coordinates are required (Email)";
			} else {
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid coordinate format";
				}
			}
				
			if (empty($_POST["website"])) {
				$website = "";
			} else {
				$website = test_input($_POST["website"]);
				if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
				$websiteErr = "Invalid Station";
				}
			}

			if (empty($_POST["comment"])) {
				$comment = "";
			} else {
				$comment = test_input($_POST["comment"]);
			}

			if (empty($_POST["gender"])) {
				$genderErr = "Identity is required";
			} else {
				$gender = test_input($_POST["gender"]);
			}
		}
			?>

			<p style="font-size: 50px; font-family: joane_stencilregular; color: white;" id="restext">Register a Star!</p>
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;"><span class="error">* This field is required</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;" id="restext">Star's Name: <br><br><input type="text" name="name" value="<?php echo $name;?>">
			<span class="error" style="font-size: 20px; font-family: TimesNewRoman; color: white;">* <?php echo $nameErr;?></span></p>
			<br>
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;" id="restext">Star's Coordinates: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span></p>
			<br>
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;" id="restext">Star's Station: <input type="text" name="website" value="<?php echo $website;?>">
			<span class="error"><?php echo $websiteErr;?></span></p>
			<br>
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;" id="restext">Star's Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></p>
			<br>
			<p style="font-size: 20px; font-family: TimesNewRoman; color: white;" id="restext">Star's Identity:
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
			<span class="error">* <?php echo $genderErr;?></span></p>
			<br><br>
			<input type="submit" name="submit" value="Submit">  
			</form>
			
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
		</center>
    </div>
    </body>
</html>