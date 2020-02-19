<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music02";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// $sql = "SELECT * FROM tracks";
// $sql = "SELECT * FROM tracks";
// $sql = "SELECT * FROM tracks WHERE id = '2'";
$sql = "SELECT * FROM tracks WHERE user_id = '2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='tracks-cont'>";
        echo "<span class='track-cell'>id: " . $row["id"] . "</span>";
        echo "<span class='track-cell'>name: " . $row["name"] . "</span>";
        echo "<span class='track-cell'>album: " . $row["album"] . "</span>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
