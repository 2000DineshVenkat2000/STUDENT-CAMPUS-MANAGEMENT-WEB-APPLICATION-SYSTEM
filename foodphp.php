<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT place, time, menu, quantity FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_columns($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Place: " . $column["place"]. " - Menu: " . $column["menu"]. " " . $column["quantity"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>