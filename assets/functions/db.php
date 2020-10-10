<?php


$servername = "localhost";
$username = "raultper_siabo";
$password = "P9!%gvrDTG%n";
$database = "raultper_savy_design";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM work_items";
$result = mysqli_query($conn, $sql);
?>