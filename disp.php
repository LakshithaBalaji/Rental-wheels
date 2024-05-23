<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "test_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get all feedbacks from the database
$sql = "SELECT Feedback FROM feedback";
$result = mysqli_query($conn, $sql);

// If there are feedbacks, display them
if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["Feedback"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No feedbacks received yet.";
}

// Close connection
mysqli_close($conn);

?>