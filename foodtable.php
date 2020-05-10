<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT place, time, menu, quantity FROM foodtable;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        $place= $row['place'];
        echo $place;
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>