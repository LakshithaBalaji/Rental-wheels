<?php

$text = isset($_GET["text"]) ? $_GET["text"] : "";
$date = isset($_GET["date"]) ? $_GET["date"] : "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete the booking from the database
$sql = "DELETE FROM `package` WHERE Vehicle = '$text' AND Date = '$date'";
mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);

?>