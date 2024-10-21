<?php
// Establish database connection
require_once('config.php');     
global $conn;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select reviews from database
$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='review'>";
        echo "<p><strong>Name:</strong> " . $row["name"]. "</p>";
        if (!empty($row["email"])) {
            echo "<p><strong>Email:</strong> " . $row["email"]. "</p>";
        }
        echo "<p><strong>Review:</strong> " . $row["review"]. "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No reviews yet.</p>";
}

$conn->close();
?>