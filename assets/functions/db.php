<?php

$servername = "localhost";
$username = "admin";
$password = "";
$database = "savvy_design";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT team_ID, team_image,team_name,team_title,team_description FROM team";
$result = mysqli_query($conn, $sql);
?>