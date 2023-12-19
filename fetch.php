<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";

// Create a new mysqli connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Define the SQL query
$sql = "SELECT `Id`, `Photo`, `Name`, `Email`, `College`,`Type of Election`, `Position`, `Description`,`Votes` FROM user";

// Execute the query and store the result in $result
$result = $connect->query($sql);
$users = array();

// Check if there are rows in the result
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Close the database connection
$connect->close();
?>
