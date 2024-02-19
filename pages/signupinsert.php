<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nike";

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$v1 = $_POST['name'];
$v2 = $_POST['email'];
$v3 = $_POST['password'];


$sql = "INSERT INTO `signupdata`( `name`, `email`, `password`) VALUES ( '$v1', '$v2', '$v3')";


if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error();
}


header("location: home.php");




$conn->close();







?>
