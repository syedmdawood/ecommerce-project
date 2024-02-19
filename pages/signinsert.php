<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nike";

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$v4 = $_POST['fname'];
$v1 = $_POST['lname'];
$v2 = $_GET['email'];
$v5 = $_GET['phone'];
$v6 = $_GET['cardname'];
$v7 = $_GET['cardno'];


$sql = "INSERT INTO `buydata`(`fname`, `lname`, `email`, `phone`, `cardname`, `cardno`) VALUES ( '$v4','$v1', '$v2', '$v5', '$v6', '$v7')";


if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error();
}

header("location : home.php");
// if ($v2 === 'admin@gmail.com'&&$v3 === 'admin123'){
//     header("location  : admin.php");
// }else{
//     header("location : home.php");
// }
exit;

$conn->close();
?>




