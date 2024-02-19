<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "nike";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tableName = "logindata";
$data = array();

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // echo "ID parameter found: $id";
    $sql = "SELECT * FROM $tableName WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc(); // Fetch a single row since we're updating a single record
    }
} else {
    echo "ID parameter is missing from the URL.";
}

if(isset($_POST['update'])) {
    $id = $_GET['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE $tableName SET email='$email', password='$password' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully.";
        header("location : admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<form action="#" method="POST">
    <h1>Update Form</h1>
    <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" placeholder="Enter email" value="<?php echo $data['email'] ?>" name="email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" value="<?php echo $data['password']; ?>" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>

</body>
</html>
