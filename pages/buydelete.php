<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nike";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $v1 = $_GET['id'];

    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM buydata WHERE id = $v1";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $v1);

    if ($stmt->execute()) {
        echo "Data Deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: 'id' parameter is missing in the URL.";
}

$conn->close();
?>
