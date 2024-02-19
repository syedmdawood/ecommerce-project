<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "nike";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tableName = "buydata";
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
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $email = $_POST['email'];
    $phone = $_GET['phone'];
    $cardname = $_GET['cardname'];
    $cardno = $_POST['cardno'];

    $sql = "UPDATE $tableName SET fname='$fname', lname='$lname', email='$email', phone='$phone', cardname='$cardname', cardno='$cardno' WHERE id='$id'";

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
        <label>First Name</label>
        <input type="name" class="form-control" placeholder="First Name" value="<?php echo $data['fname'] ?>" name="fname">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="name" class="form-control" placeholder="Last Name" value="<?php echo $data['lname'] ?>" name="lname">
    </div>
    <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" placeholder="Enter email" value="<?php echo $data['email'] ?>" name="email">
    </div>
    <div class="form-group">
        <label>Phone No</label>
        <input type="number" class="form-control" placeholder="Enter Phone No" value="<?php echo $data['phone'] ?>" name="phone">
    </div>
    <div class="form-group">
        <label>Card Name</label>
        <input type="text" class="form-control" placeholder="Card Name" value="<?php echo $data['cardname']; ?>" name="cardname">
    </div>
    <div class="form-group">
        <label>Card No</label>
        <input type="password" class="form-control" placeholder="Card NO" value="<?php echo $data['cardno']; ?>" name="cardno">
    </div>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>

</body>
</html>
