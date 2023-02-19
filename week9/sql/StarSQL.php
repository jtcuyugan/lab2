<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StarDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Stars (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(300) NOT NULL,
email VARCHAR(300) NOT NULL,
website VARCHAR(300) NOT NULL,
comment VARCHAR(300) NOT NULL,
gender VARCHAR(300) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Stars created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>