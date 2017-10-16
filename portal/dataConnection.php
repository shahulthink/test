

<?php

 header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "wp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, post_title, post_type FROM wp_posts";
$result = $conn->query($sql);

$data =array();
while($row =  $result->fetch_assoc()){
	$data[]= $row;
}

print json_encode($data);

?>