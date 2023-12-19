<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";
$typeOfElection = "Tech";

// Create a new mysqli connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Define the SQL query with a placeholder
$sql = "SELECT `Id`, `Photo`, `Name`, `Email`, `College`, `Type of Election`, `Position`, `Description`, `Votes` FROM user WHERE `Type of Election` = ?";

// Prepare the statement
$stmt = $connect->prepare($sql);

// Bind the parameter to the placeholder
$stmt->bind_param("s", $typeOfElection);

// Execute the query
$stmt->execute();

// Get the result set
$result = $stmt->get_result();

$users = array();

// Check if there are rows in the result
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Close the statement and database connection
$stmt->close();
$connect->close();
?>
