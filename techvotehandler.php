<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database (Replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "voting";

    // Create a database connection
    $connect = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    // Get the user's vote and user ID from the form
    $gvotes = $_POST["gvotes"];
    $gid = $_POST["gid"];

    // Update the user's vote count in the database
    $sql = "UPDATE user SET votes = votes + 1 WHERE id = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("i", $gid);

    // Execute the update query
    if ($stmt->execute()) {
        header("Location: Dramavoting.php");
        exit();
    } else {
        // Error occurred while counting the vote
        echo "Error: " . $connect->error;
    }

    // Close the database connection
    $connect->close();
} else {
    // If the form was not submitted properly, show an error message
    echo "Invalid request!";
}
?>
