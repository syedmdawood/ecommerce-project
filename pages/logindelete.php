<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nike";

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$v1 = $_GET['id'];


$sql = "DELETE FROM logindata WHERE `logindata`.`id` = $v1";


if ($conn->query($sql) === TRUE) {
    echo "Data Deleted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error();
}


$conn->close();
?>
