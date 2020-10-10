<?php

$servername = "localhost";
$username = "raultper_siabo";
$password = "P9!%gvrDTG%n";
$database = "raultper_savy_design";

// $servername = "localhost";
// $username = "admin";
// $password = "";
// $database = "savvy_design";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM team";
$result = mysqli_query($conn, $sql);
?>