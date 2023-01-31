<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> [ RESOURCES ] </title>
	<link rel="stylesheet" type="text/css" href = "../css/resources.css">
	<link rel="icon" type="image/png" href="../images/wootteoresources.png">
</head>
<body>
<div id="navbar" id="top">
	<div id="pageselector">
		<center>
			<ul>
				<li id="buttons"><a href="../index.html" id="buttons">HOME</a></li>
				<li id="buttons"><a href="Leo.html" id="buttons">SUN</a></li>
				<li id="buttons"><a href="Gallery.html" id="logo"><img src="../images/wootteogallery.png" id="logo" padding="none"></img></a></li>
				<li id="buttons"><a href="Sagi.html" id="buttons">MOON</a></li>
				<li id="buttons"><a href="Libra.html" id="buttons">RISING</a></li>
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

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "Name is required";
			} else {
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
				$nameErr = "Only letters and white space allowed";
				}
			}
			
			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			} else {
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				}
			}
				
			if (empty($_POST["website"])) {
				$website = "";
			} else {
				$website = test_input($_POST["website"]);
				if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
				$websiteErr = "Invalid URL";
				}
			}

			if (empty($_POST["comment"])) {
				$comment = "";
			} else {
				$comment = test_input($_POST["comment"]);
			}

			if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
			} else {
				$gender = test_input($_POST["gender"]);
			}
			}

			function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
			?>

			<h2>PHP Form Validation Example</h2>
			<p><span class="error">* required field</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			Name: <input type="text" name="name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>
			E-mail: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
			Website: <input type="text" name="website" value="<?php echo $website;?>">
			<span class="error"><?php echo $websiteErr;?></span>
			<br><br>
			Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
			<br><br>
			Gender:
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
			<span class="error">* <?php echo $genderErr;?></span>
			<br><br>
			<input type="submit" name="submit" value="Submit">  
			</form>

			<?php
			echo "<h2>Your Input:</h2>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $website;
			echo "<br>";
			echo $comment;
			echo "<br>";
			echo $gender;
			?>
		</center>
		<center>
		<p style="font-size: 55px; font-family: joane_stencilregular; color: white;" id="lobbytext">Resources</p>
		<br>

		<p style="font-size: 30px; font-family: joane_stencilregular; color: white;" id="lobbytext">HTML and CSS</p>
        <p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://www.w3schools.com/html/default.asp" target="_blank" id="buttons">W3Schools HTML</a></p>
		<p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://www.w3schools.com/css/default.asp" target="_blank" id="buttons">W3Schools CSS</a></p>
        <p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://codesandbox.io/s/d2nei?file=/style.css:5133-5480" target="_blank" id="buttons">Gallery Layout</a></p>
		<br>

		<p style="font-size: 30px; font-family: joane_stencilregular; color: white;" id="lobbytext">Images</p>
        <p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://www.instagram.com/wootteo/?hl=en" target="_blank" id="buttons">Wootteo (Astronaut Mascot)</a></p>
        <p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://www.vexels.com/merch/designs/zodiac-constellation-badge/" target="_blank" id="buttons">Star Sign Constellation Logos</a></p>
        <p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://dream.ai/" target="_blank" id="buttons">Dream by WOMBO Editing</a></p>
        <p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://lunaf.com/lunar-calendar/2002/08/16/" target="_blank" id="buttons">Moon Phase (08/16/2002)</a></p>
        <p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://asterisk.apod.com/viewtopic.php?t=24904" target="_blank" id="buttons">Astronomy Picture of The Day (08/16/2002)</a></p>
        <p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://www.pinterest.ph/pin/842313936571152279/" target="_blank" id="buttons">Book Picture</a></p>
		<br>

		<p style="font-size: 30px; font-family: joane_stencilregular; color: white;" id="lobbytext">Moving Media</p>
		<p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://youtu.be/c6ASQOwKkhk" target="_blank" id="buttons">The Astronaut MV</a></p>
        <p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext"><a href="https://open.spotify.com/playlist/4ou2HDr1vBRJcA5VHl2eRX?si=9fef52eef14d4b25" target="_blank" id="buttons">Spotify Playlist</a></p>
		<br>

		<p style="font-size: 30px; font-family: joane_stencilregular; color: white;" id="lobbytext">Creator Made</p>
		<p style="font-size: 20px; font-family: TimesNewRoman; color: lightgray;" id="lobbytext">Everything that is not stated.</p>
        <br>
		</center>	

</div>

</body>
</html>
