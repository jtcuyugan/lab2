<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title> [ SQLTable ] </title>
	<link rel="stylesheet" type="text/css" href = "../css/feedback.css">
	<link rel="icon" type="image/x-icon" href="../images/wootteofeedback.ico">
</head>
<html>
    <body>

<?php
$servername = "192.168.150.213";
$username = "webprogmi212";
$password = "b3ntRhino98";
$dbname = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$db= $conn;

$tableName="jcuyugan_Stars";

$columns= ['name', 'email','website','comment','gender'];

$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Stars is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "The Galaxy is yet to be filled."; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>
    </body>
</html>